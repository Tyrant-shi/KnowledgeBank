package Test;
import org.springframework.beans.factory.BeanFactory;
import org.springframework.context.ApplicationContext;
import org.springframework.context.support.ClassPathXmlApplicationContext;
import org.springframework.context.support.FileSystemXmlApplicationContext;
import org.springframework.core.io.FileSystemResource;

import dao.TestDao;
public class Test {
	public static void main(String[] args) {
		//初始化Spring容器ApplicationContext,加载配置文件
		/*ApplicationContext appCon=new ClassPathXmlApplicationContext("applicationContext.xml");
		//通过容器获取test实例
		TestDao tt=(TestDao)appCon.getBean("test");
		tt.sayHello();*/
		
		//通过FileSystemXmlApplicationContext创建
		ApplicationContext appCon=new FileSystemXmlApplicationContext("E:\\Program Files\\Java\\JavaEE\\ch1\\src\\ApplicationContext.xml");
		TestDao tt=(TestDao)appCon.getBean("test");
		tt.sayHello();
	}
}
