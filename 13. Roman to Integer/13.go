package leetcode

func romanToInt(s string) int {
	lit := map[string]int{
		"I": 1,
		"V": 5,
		"X": 10,
		"L": 50,
		"C": 100,
		"D": 500,
		"M": 1000,
	}
	res := 0
	/*
	    for _, v := range s {
			res = res+lit[string(v)]
		}
	*/

	for i := 0; i < len(s); i++ {
		if i > 0 && lit[string(s[i])] > lit[string(s[i-1])] {
			res = res + lit[string(s[i])] - 2*lit[string(s[i-1])]
		} else {
			res = res + lit[string(s[i])]
		}

	}

	return res
}
