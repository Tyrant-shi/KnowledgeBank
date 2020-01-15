package Test;
import org.springframework.beans.factory.BeanFactory;
import org.springframework.context.ApplicationContext;
import org.springframework.context.support.ClassPathXmlApplicationContext;
import org.springframework.context.support.FileSystemXmlApplicationContext;
import org.springframework.core.io.FileSystemResource;

import dao.TestDao;
public class Test {
	public static void main(String[] args) {
		//��ʼ��Spring����ApplicationContext,���������ļ�
		/*ApplicationContext appCon=new ClassPathXmlApplicationContext("applicationContext.xml");
		//ͨ��������ȡtestʵ��
		TestDao tt=(TestDao)appCon.getBean("test");
		tt.sayHello();*/
		
		//ͨ��FileSystemXmlApplicationContext����
		ApplicationContext appCon=new FileSystemXmlApplicationContext("E:\\Program Files\\Java\\JavaEE\\ch1\\src\\ApplicationContext.xml");
		TestDao tt=(TestDao)appCon.getBean("test");
		tt.sayHello();
	}
}
