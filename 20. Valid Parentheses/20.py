class Solution:
    def isValid(self, s: str) -> bool:
        if (len(s) <= 1):
            return False
   
        for j in range(10001):
            substr = ["{}", "[]", "()"]
            for i in substr:
                if i in s:
                    s = s.replace(i, "")

        if (len(s) > 0):
            return False
        
        return True
        