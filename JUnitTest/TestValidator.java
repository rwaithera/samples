import static org.junit.Assert.*;
import java.util.Scanner;

public class TestValidator{
	Scanner input = new Scanner(System.in);
	String password;
	
	@org.junit.Test
	public void testValidLength(){
		System.out.println("Enter Password");
		password = input.next();
		assertEquals(true, PasswordValidator.isValid(password));
	}
}