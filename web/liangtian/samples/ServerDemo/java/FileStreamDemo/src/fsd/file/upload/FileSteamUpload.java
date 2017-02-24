package fsd.file.upload;

import java.io.BufferedReader;
import java.io.DataInputStream;
import java.io.DataOutputStream;
import java.io.File;
import java.io.FileOutputStream;
import java.io.IOException;
import java.io.PrintWriter;
import java.io.StringReader;
import java.text.SimpleDateFormat;
import java.util.Date;
import java.util.HashMap;
import java.util.Map;

import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

@SuppressWarnings("serial")
public class FileSteamUpload extends HttpServlet {

	/**
	 * Constructor of the object.
	 */
	public FileSteamUpload() {
		super();
	}

	/**
	 * Destruction of the servlet. <br>
	 */
	public void destroy() {
		super.destroy(); // Just puts "destroy" string in log
		// Put your code here
	}

	/**
	 * The doGet method of the servlet. <br>
	 * 
	 * This method is called when a form has its tag value method equals to get.
	 * 
	 * @param request
	 *            the request send by the client to the server
	 * @param response
	 *            the response send by the server to the client
	 * @throws ServletException
	 *             if an error occurred
	 * @throws IOException
	 *             if an error occurred
	 */
	public void doGet(HttpServletRequest request, HttpServletResponse response)
			throws ServletException, IOException {
		this.doPost(request, response);
	}

	/**
	 * The doPost method of the servlet. <br>
	 * 
	 * This method is called when a form has its tag value method equals to
	 * post.
	 * 
	 * @param request
	 *            the request send by the client to the server
	 * @param response
	 *            the response send by the server to the client
	 * @throws ServletException
	 *             if an error occurred
	 * @throws IOException
	 *             if an error occurred
	 */
	public void doPost(HttpServletRequest request, HttpServletResponse response)
			throws ServletException, IOException {
		response.setContentType("text/html;charset=UTF-8");
		PrintWriter out = response.getWriter();
		final int NONE = 0; // ״̬�룬��ʾû���������
		final int DATAHEADER = 1; // ��ʾ��һ��Ҫ������ͷ��Ϣ
		final int FILEDATA = 2; // ��ʾ����Ҫ�������ϴ��ļ��Ͷ���������
		final int FIELDDATA = 3; // ��ʾ����Ҫ����������ı�ֵ
		// ������Ϣʵ����ܳ���(������Ϣ�г���Ϣͷ֮������ݳ���)
		int totalbytes = request.getContentLength();
		File f; // �ϴ��ļ������ڷ�������
		// ����������Ϣʵ����ֽ�����
		byte[] dataOrigin = new byte[totalbytes];
		// ����post����ļ��ı���b��Ϊԭʼ���ݵĸ����ṩ��ȡ�ļ����ݵĲ���
		byte[] b = new byte[totalbytes];
		// ������Ϣ����
		String contentType = request.getContentType();
		String fieldname = ""; // ���������
		String fieldvalue = ""; // �����ֵ
		String fileFormName = ""; // �ϴ����ļ��ٱ��е�����
		String fileRealName = ""; // �ϴ��ļ�����ʵ����
		String boundary = ""; // �ֽ���ַ���
		String lastboundary = ""; // �����ֽ���ַ���
		int fileSize = 0; // �ļ�����
		// ���ɱ��������/ֵ�Ĺ�ϣ��
		Map formfieldsTable = new HashMap();
		// �����ļ��������/�ļ����Ĺ�ϣ��
		Map filenameTable = new HashMap();
		// ����Ϣͷ�������ҵ��ֽ���Ķ���
		int pos = contentType.indexOf("boundary=");
		int pos2; // position2
		if (pos != -1) {
			pos += "boundary=".length();
			boundary = "--" + contentType.substring(pos); // �������ֽ��
			lastboundary = boundary + "--"; // �õ������ֽ��
		}
		int state = NONE; // ��ʼ״̬ΪNONE
		// �õ�������Ϣ������������
		DataInputStream in = new DataInputStream(request.getInputStream());
		in.readFully(dataOrigin); // ���ݳ��ȣ�����Ϣʵ������ݶ����ֽ�����dataOrigin��
		in.close(); // �ر�������
		String reqcontent = new String(dataOrigin); // ���ֽ������еõ���ʾʵ����ַ���
		// ���ַ����еõ����������
		BufferedReader reqbuf = new BufferedReader(new StringReader(reqcontent));
		// ����ѭ����־
		boolean flag = true;

		// int i = 0;
		while (flag == true) {
			String s = reqbuf.readLine();
			if (s == lastboundary || s == null)
				break;
			switch (state) {
			case NONE:
				if (s.startsWith(boundary)) {
					// ��������ֽ�������ʾ��һ��һ��ͷ��Ϣ
					state = DATAHEADER;
					// i += 1;
				}
				break;
			case DATAHEADER:
				pos = s.indexOf("filename=");
				// ���жϳ�����һ���ı������ͷ��Ϣ������һ���ϴ��ļ���ͷ��Ϣ
				if (pos == -1) {
					// ������ı������ͷ��Ϣ�����������������
					pos = s.indexOf("name=");
					pos += "name=".length() + 1; // 1��ʾ�����"��ռλ
					s = s.substring(pos);
					int l = s.length();
					s = s.substring(0, l - 1); // Ӧ����"
					fieldname = s; // ��������Ʒ���fieldname
					out.print("fieldname=" + fieldname);
					state = FIELDDATA; // ����״̬�룬׼����ȡ�����ֵ
				} else {
					// ������ļ����ݵ�ͷ���ȴ洢��һ�У��������ֽ������ж�λ
					String temp = s;
					// �Ƚ������ļ���
					pos = s.indexOf("name=");
					pos += "name=".length() + 1; // 1��ʾ�����"��ռλ
					pos2 = s.indexOf("filename=");
					String s1 = s.substring(pos, pos2 - 3); // 3��ʾ";����һ���ո�
					fileFormName = s1;
					pos2 += "filename=".length() + 1; // 1��ʾ�����"��ռλ
					s = s.substring(pos2);
					int l = s.length();
					s = s.substring(0, l - 1);
					pos2 = s.lastIndexOf("\\"); // ����IE�����������
					s = s.substring(pos2 + 1);
					fileRealName = s;
					//out.print("fileRealName=" + fileRealName + "");
					/*//out.print("fileRealName.length()=" + fileRealName.length()
							+ "");*/
					if (fileRealName.length() != 0) { // ȷ�����ļ����ϴ�
						// ������һ���ִ��ֽ�������ȡ���ļ�������
						b = dataOrigin; // ����ԭʼ�����Ա���ȡ�ļ�
						pos = byteIndexOf(b, temp, 0); // ��λ��
						// ��λ��һ�У�2 ��ʾһ���س���һ������ռ�����ֽ�
						b = subBytes(b, pos + temp.getBytes().length + 2,
								b.length);
						// �ٶ�һ����Ϣ������һ�������ݵ�Content-type
						s = reqbuf.readLine();
						
						String dirPath = "UploadFile";
						File pfile = new File(dirPath);
						if (!pfile.exists()) {
							pfile.mkdirs();
						}
						// �����ļ���������׼��д�ļ�
						f = new File(dirPath + File.separator
								+ fileRealName);
						DataOutputStream fileout = new DataOutputStream(
								new FileOutputStream(f));
						// �ֽ�����������һ�У�4��ʾ���س�����ռ4���ֽڣ����еĻس�����2���ֽڣ�Content-type����
						// һ���ǻس����б�ʾ�Ŀ��У�ռ2���ֽ�
						// �õ��ļ����ݵ���ʼλ��
						b = subBytes(b, s.getBytes().length + 4, b.length);
						pos = byteIndexOf(b, boundary, 0); // ��λ�ļ����ݵĽ�β
						b = subBytes(b, 0, pos - 1); // ȡ���ļ�����
						fileout.write(b, 0, b.length - 1); // ���ļ����ݴ���
						fileout.close();
						fileSize = b.length - 1; // �ļ����ȴ���fileSize
						/*out.print("fileFormName=" + fileFormName + " filename="
								+ fileRealName + " fileSize=" + fileSize + "");*/
						filenameTable.put(fileFormName, fileRealName);
						state = FILEDATA;
					}
				}
				break;
			case FIELDDATA:
				// ��ȡ�����ֵ
				s = reqbuf.readLine();
				fieldvalue = s; // ����fieldvalue
				/*out.print(" fieldvalue=" + fieldvalue + "");*/
				formfieldsTable.put(fieldname, fieldvalue);
				state = NONE;
				break;
			case FILEDATA:
				// ������ļ����ݲ����з�����ֱ�Ӷ���ȥ
				while ((!s.startsWith(boundary))
						&& (!s.startsWith(lastboundary))) {
					s = reqbuf.readLine();
					if (s.startsWith(boundary)) {
						state = DATAHEADER;
					} else {
						break;
					}
				}
				break;
			}
		}
		// ָ���������ͣ����ҿ�����ʾ����
		/*out.println("");
		out.println("");
		out.println("");*/
		// �ļ��ϴ����
		/*out.println("IDΪ" + formfieldsTable.get("FileID1") + "���ļ�"
				+ filenameTable.get("FileData1") + "�Ѿ��ϴ�!");
		out.println("IDΪ" + formfieldsTable.get("FileID2") + "���ļ�"
				+ filenameTable.get("FileData2") + "�Ѿ��ϴ�!");
		// out.println("i = " + i + "");
		out.println("");
		out.println("");*/
	}

	private static int byteIndexOf(byte[] b, String s, int start) {
		return byteIndexOf(b, s.getBytes(), start);
	}

	private static int byteIndexOf(byte[] b, byte[] s, int start) {
		int i;
		if (s.length == 0) {
			return 0;
		}
		int max = b.length - s.length;
		if (max < 0) {
			return -1;
		}
		if (start > max) {
			return -1;
		}
		if (start < 0) {
			start = 0;
		}
		// ��b���ҵ�s�ĵ�һ��Ԫ��
		search: for (i = start; i <= max; i++) {
			if (b[i] == s[0]) {
				// �ҵ���s�еĵ�һ��Ԫ�غ󣬱Ƚ�ʣ��Ĳ����Ƿ����
				int k = 1;
				while (k < s.length) {
					if (b[k + i] != s[k]) {
						continue search;
					}
					k++;
				}
				return i;
			}
		}
		return -1;
	}

	private static byte[] subBytes(byte[] b, int from, int end) {
		byte[] result = new byte[end - from];
		System.arraycopy(b, from, result, 0, end - from);
		return result;
	}

	private static String subBytesString(byte[] b, int from, int end) {
		return new String(subBytes(b, from, end));
	}

	/**
	 * Initialization of the servlet. <br>
	 * 
	 * @throws ServletException
	 *             if an error occurs
	 */
	public void init() throws ServletException {
		// Put your code here
	}

}
