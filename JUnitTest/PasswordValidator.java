public class PasswordValidator {
	private final static int MIN_LENGTH = 6; 
	private final static int MAX_LENGTH = 10;

	public static boolean isValid(String password) {
		return password.length() >= MIN_LENGTH &&
		   	   password.length() <= MAX_LENGTH;
	}
}