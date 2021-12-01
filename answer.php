package blockchain;

import java.math.BigInteger;

public class Question1 {
	
	public String run() {
		String temp = factorial(100).toString();
		int sum = 0;
		for (int i = 0; i < temp.length(); i++)
			sum += temp.charAt(i) - '0';
		return Integer.toString(sum);
	}

        // Returns n!.
	public static BigInteger factorial(int n) {
		if (n < 0)
			throw new IllegalArgumentException("Factorial of negative number");
		BigInteger prod = BigInteger.ONE;
		for (int i = 2; i <= n; i++)
			prod = prod.multiply(BigInteger.valueOf(i));
		return prod;
	}

	public static void main(String[] args) {
                Question1 solution = new Question1();
		System.out.println(solution.run());
	}	
}