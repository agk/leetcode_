class Solution:
    def runningSum(self, nums: List[int]) -> List[int]:
        sum = 0
        if len(nums) == 0:
            return sum
        
        result = [] 
        
        for i in range(len(nums)):
            sum += nums[i] 
            result.append(sum)
        
        return result
    
        
        