<h3><a href="Lectures\HW4.pdf">PDF下載連結</a></h3> 

<h1>作業4 陣列與字串</h1>

<h2>4-1：字串基礎</h2>
	<h3>請回答下列程式碼的輸出值於記事本中</h3>
	<h3>4-1-1 : strlen()</h3>
	<img src="images/HW4_1_1.png">
	<h3>4-1-2 : strcpy()</h3>
	<img src="images/HW4_1_2.png">
	<h3>4-1-3 : strcat()</h3>
	<img src="images/HW4_1_3.png">
	<h3>4-1-4 : strcmp()</h3>
	<img src="images/HW4_1_4.png">
	<h3>4-1-5 : insert()</h3>
	<img src="images/HW4_1_5.png">
	<h3>4-1-6: substr()</h3>
	<img src="images/HW4_1_6.png">
	<h3>4-1-7 : find()</h3>
	<img src="images/HW4_1_7.png">
	<h3>4-1-8 : at()</h3>
	<img src="images/HW4_1_8.png">
	<h3>4-1-9 : length()</h3>
	<img src="images/HW4_1_9.png">

<h2>4-2：字串練習─回文練習</h2>
	<h3>回文(Palindrome)修辭法指的是該句子可以順著讀，也可以反著讀，正反讀都能讀通且往往有不同的意思，其中嚴式回文指的是完全相反的兩句互成上下文。請寫一個程式可以讓使用者輸入一串文字(英文、標點符號或數字)，判別使用者輸入的文字是否符合嚴式回文(前後互相對稱)。</h3>
	<h3>Hint：你可能會使用到4-1-9的length()語法</h3>
	<img src="images/HW4_2_1.png" style="display:block; margin:auto;">
	<img src="images/HW4_2_2.png" style="display:block; margin:auto;">

<h2>4-3：一維陣列─極端值的計算</h2>
	<h3>醫學或統計通常會關注極端值，比如說發育過早/過晚都是一種極端、或是計算貧富差距時，最高10%收入與最低10%收入的比值常拿來評估貧富差距的大小，因此請開一個可以放置五個人的身高(float/double)陣列，讓使用者輸入這五個身高，接著輸出這五個人中最高與最矮分別是多少</h3>
	<h3>Hint：無須先排序(sort)過也可以做到</h3>
	<img src="images/HW4_3.png" style="display:block; margin:auto;">

<h2>4-4：二維陣列─模擬樣區法</h2>
	<h3>在估計一塊大面積(森林、海洋或草原)的生物個數時，往往因為面積過大無法全部捕捉或是直接計數，而選擇使用樣區法或捉放法來計算，樣區法適合散布均勻的族群，指的是將該面積切割成數個小區塊後再計算每個小區塊的生物個數回去反推總族群數目。</h3>
	<h3>今天假設有一個10x10的區域，請寫一個程式讓使用者輸入其中3x3區域的生物個數後，幫助使用者推測該10x10區域的族群個數，同時印出該3x3區塊的族群數目於畫面中。</h3>
	<h3>Hint：生物個數=(該3x3區塊內的生物總數)* 100 / 9</h3>
	<img src="images/HW4_4.png" style="display:block; margin:auto;">

<br>
<br>
<br>
