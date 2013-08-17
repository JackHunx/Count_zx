     
        <script type="text/javascript">
            var chart;
            var later;
            var compare;
            var allCompare;
            var chartData = [{
                name:"已还款",
                value:<?php echo $result['success_repay'];?>
            },{
                name:"未还款",
                value:<?php echo $result['not_repay'];?>
            }];
            var laterData =[{
                name:"逾期已还款",
                value:<?php echo $result['success_laterepay'];?>
            },{
                name:"未还款",
                value:<?php echo $result['false_laterepay'];?>
            }];
            var compareData=[{
                name:"正常",
                value:<?php echo $result['borrow_total']-($result['false_laterepay']+$result['success_laterepay']);?>
            },{
                name:"逾期",
                value:<?php echo $result['false_laterepay']+$result['success_laterepay'];?>
            }];
            var allCompareData=[{
                name:"正常已还款",
                value:<?php echo $result['success_repay']-$result['success_laterepay'];?>
            },{
                name:"逾期已还款",
                value:<?php echo $result['success_laterepay'];?>
            },{
                name:"逾期未还款",
                value:<?php echo $result['false_laterepay'];?>
            },{
                name:"正常未还款",
                value:<?php echo $result['not_repay']-$result['false_laterepay'];?>
            }];
            AmCharts.ready(function () {
                // PIE CHART
                chart = new AmCharts.AmPieChart();
                chart.dataProvider = chartData;
                chart.titleField = "name";
                chart.valueField = "value";
                chart.outlineColor = "#FFFFFF";
                chart.outlineAlpha = 0.8;
                chart.outlineThickness = 2;
                
               
                // WRITE
                chart.write("borrow");
                
                later = new AmCharts.AmPieChart();
                later.dataProvider = laterData;
                later.titleField = "name";
                later.valueField = "value";
                later.outlineColor = "#FFFFFF";
                later.outlineAlpha = 0.8;
                later.outlineThickness = 2;
                
                // WRITE
                later.write("later");
                
                compare = new AmCharts.AmPieChart();
                compare.dataProvider = compareData;
                compare.titleField = "name";
                compare.valueField = "value";
                compare.outlineColor = "#FFFFFF";
                compare.outlineAlpha = 0.8;
                compare.outlineThickness = 2;
                
                // WRITE
                compare.write("compare");
                
                allCompare = new AmCharts.AmPieChart();
                allCompare.dataProvider = allCompareData;
                allCompare.titleField = "name";
                allCompare.valueField = "value";
                allCompare.outlineColor = "#FFFFFF";
                allCompare.outlineAlpha = 0.8;
                allCompare.outlineThickness = 2;
                
                // WRITE
                allCompare.write("allcompare");
            });
        </script>
        <div style="width:450px; height: 400px;float: left;border:1px solid black">
            <p>借款总额: ￥<?php echo $result['borrow_total'];?>元</p>
            <p>已还款: ￥<?php echo $result['success_repay'];?>元</p>
            <p>未还款: ￥<font color="red"><?php echo $result['not_repay'];?></font>元</p>
            <div id="borrow" style="width:450px; height: 400px;"></div>
        </div>
        <div style="width:450px; height: 400px;float: left;border:1px solid black">
        <p>逾期总额: ￥<?php echo $result['success_laterepay']+$result['false_laterepay'];?>元</p>
        <p>逾期已还款: ￥<?php echo $result['success_laterepay'];?>元</p>
        <p>逾期未还款: ￥<font color="red"><?php echo $result['false_laterepay'];?></font>元</p>
        <div id="later" style="width:450px; height: 400px;"></div>
        </div>
        <div class="clear"></div>
        <div style="width:450px; height: 400px;float: left;border:1px solid black">
        <p>逾期与正常比例:</p>
        <div id="compare" style="width:100%; height: 400px;"></div>
        </div>
        <div style="width:450px; height: 400px;float: left;border:1px solid black">
        <p>还款状态比例:</p>
        <div id="allcompare" style="width:100%; height: 400px;"></div>
        </div>
        <div class="clear"></div>