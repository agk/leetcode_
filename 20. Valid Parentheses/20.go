
func isValid(s string) bool {
	if len(s) <= 1 {
		return false
	}

	for j := 0; j <= 10000; j++ {
		var substr = [3]string{"{}", "[]", "()"}
		for i := 0; i < len(substr); i++ {
			if strings.Contains(s, substr[i]) {
				s = strings.Replace(s, substr[i], "", -1)
			}
		}
		//fmt.Println(len(s))
	}
	//fmt.Println(s)

	if len(s) > 0 {
		return false
	}
	return true
}