class Solution:
    def maximumWealth(self, accounts: List[List[int]]) -> int:
        maxSum = 0
        
        for i in range(len(accounts)):
            sumList = sum(accounts[i])
            if sumList > maxSum:
                maxSum = sumList
        
        return maxSum
