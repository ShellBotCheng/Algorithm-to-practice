<?php
class Solution {

    /**
     * 66 加 一
     * @param Integer[] $digits
     * @return Integer[]
     */
    function plusOne($digits) {
        for($i = count($digits)-1; $i >= 0 ;$i--){
            $digits[$i]++;
            $digits[$i] = $digits[$i] % 10;
            if($digits[$i] != 0){
                return $digits;
            }
        }
        array_unshift($digits, 1);
        return $digits;
    }


	/**
     * 560. 和为K的子数组
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer
     */
    function subarraySum($nums, $k) {
        $n = count($nums);
        if ($n == 0) {
            return 0;
        }
        $ans = 0;
        $arr = [];
        $arr[0] = 1;
        $preSum = 0;
        for ($i = 0; $i < $n; $i++) {
            $preSum += $nums[$i];
            $diff = $preSum - $k;
            isset($arr[$diff]) && $ans+= $arr[$diff];
            if (isset($arr[$preSum])) {
                $arr[$preSum]++;
            } else {
                $arr[$preSum] = 1;
            }
        }
        return $ans;
    }

}
