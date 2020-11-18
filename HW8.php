<h3><a href="Lectures\HW8.pdf">PDF下載連結</a></h3> 

<h1>作業8 列舉、結構與標頭檔</h1>

<h2>8-1：列舉(enum)─星期轉換</h2>
	<h3>宣告出一個enum，並且在把Monday、Tuesday、Wednesday...設定成1、2、3...，讓使用者可以輸入數字後，透過switch與enum轉換成禮拜幾。</h3>
	<h3>TODO：switch中必須使用enum裏頭宣告的Monday、Tuesday...而非數字1、2...</h3>
	<img src="images/HW8_1.png" style="display:block; margin:auto;">
	
<h2>8-2：結構─資料庫查找系統</h2>
	<h3>下面是把上課提到的犯罪開放資料轉存成結構陣列的程式碼，請將其修改後，讓該程式具有可以藉由輸入latitude來找出該筆資料的功能。</h3>
	<h3>(資料下載：<a href="http://www.lkm543.site/Course/Cpp/Data/TestData.csv">http://www.lkm543.site/Course/Cpp/Data/TestData.csv</a>)</h3>
	<script src="https://gist.github.com/anonymous/a473abf2cdaf64364ff241764e1f49e9.js"></script>
	<img src="images/HW8_2.png" style="display:block; margin:auto;">

<h2>8-3：結構與運算子重載</h2>
	<h3>請開一個可以儲存三維座標的結構，裏頭有三個維度的座標(x,y,z)，並且兩個三維結構相減可以得到這兩個三維座標點的歐基里德距離(√((x_1-x_2 )^2+(y_1-y_2 )^2+(z_1-z_2 )^2 ))，該結構也支援使用者直接使用cout輸出</h3>
	<h3>Hint：#include <math.h>後，可以使用sqrt()開根號</h3>
	<img src="images/HW8_3.png" style="display:block; margin:auto;">

<h2>8-4：標頭檔的撰寫與使用</h2>
	<h3>請把8-3的結果拆解成一個標頭檔(.h)與cpp檔，並且在main.cpp中可以直接include標頭檔就可以使用你寫的三維結構！</h3>
<br>
<br>
<br>
