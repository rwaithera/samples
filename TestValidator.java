import static org.junit.Assert.*;
import org.junit.Test;

import java.util.Scanner;

public class TestValidator{
	Scanner input = new Scanner(System.in);
	String password;
	System.out.println("Input password");
	password = input.nextString();
	
	@Test
	public void testValidLength(){
		assertEquals(true, PasswordValidator.isValid(password));
	}
}