<?php
    class Schedule {
        function load_schedule(year, week) {
            $data = file_get_contents('/json/' + year + '/' + week + '.json');
            $json = json_decode($data, true);
            return $json;
        }

        function schedule_times() {
            $dt = new DateTime();
            $now = $dt->format('Y-m-d H:i:s');

            $wk1_start  = "2015-09-13T13:00:00-04:00"
            $wk2_start  = "2015-09-20T13:00:00-04:00"
            $wk3_start  = "2015-09-27T13:00:00-04:00"
            $wk4_start  = "2015-10-04T13:00:00-04:00"
            $wk5_start  = "2015-10-11T13:00:00-04:00"
            $wk6_start  = "2015-10-18T13:00:00-04:00"
            $wk7_start  = "2015-10-25T13:00:00-04:00"
            $wk8_start  = "2015-11-01T13:00:00-04:00"
            $wk9_start  = "2015-11-08T13:00:00-04:00"
            $wk10_start = "2015-11-15T13:00:00-04:00"
            $wk11_start = "2015-11-22T13:00:00-04:00"
            $wk12_start = "2015-11-29T13:00:00-04:00"
            $wk13_start = "2015-12-06T13:00:00-04:00"
            $wk14_start = "2015-12-13T13:00:00-04:00"
            $wk15_start = "2015-12-20T13:00:00-04:00"
            $wk16_start = "2015-12-27T13:00:00-04:00"

            if ($now < $wk1_start) {
                $current_week = "wk1"
            elseif ($now > $wk1_start && $now < $wk2_start)
                $current_week = "wk2"
            elseif ($now > $wk2_start && $now < $wk3_start)
                $current_week = "wk3"
            elseif ($now > $wk3_start && $now < $wk4_start)
                $current_week = "wk4"
            elseif ($now > $wk4_start && $now < $wk5_start)
                $current_week = "wk5"
            elseif ($now > $wk5_start && $now < $wk6_start)
                $current_week = "wk6"
            elseif ($now > $wk6_start && $now < $wk7_start)
                $current_week = "wk7"
            elseif ($now > $wk7_start && $now < $wk8_start)
                $current_week = "wk8"
            elseif ($now > $wk8_start && $now < $wk9_start)
                $current_week = "wk9"
            elseif ($now > $wk9_start && $now < $wk10_start)
                $current_week = "wk10"
            elseif ($now > $wk10_start && $now < $wk11_start)
                $current_week = "wk11"
            elseif ($now > $wk11_start && $now < $wk12_start)
                $current_week = "wk12"
            elseif ($now > $wk12_start && $wk13_start)
                $current_week = "wk13"
            elseif ($now > $wk13_start && $now < $wk14_start)
                $current_week = "wk14"
            elseif ($now > $wk14_start && $now < $wk15_start)
                $current_week = "wk15"
            elseif ($now > $wk15_start && $now < $wk16_start)
                $current_week = "wk16"
            elseif ($now > $wk16_start)
                $current_week = "wk17"
            }

            return $current_week
        }
    }
?>
