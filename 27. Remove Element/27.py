
class Solution:
    def removeElement(self, nums: List[int], val: int) -> int:
        k = 0

        while k < len(nums):
            if val in nums:
                nums.pop(nums.index(val))
            else:
                k += 1

        return k