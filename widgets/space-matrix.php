<?php //include('441.php'); ?>
<!DOCTYPE html>
<html charset="UTF-8">
<head>
<title>441 Cube Space Matrix - 13:20 Time.net</title>
<style>
	table {font-size:14px; border-collapse:collapse}
	td {width: 28px; height: 28px; padding: 2px; text-align:center; border: 1px #222 solid}
	.border-top {border-top:3px #222 solid}
	.border-right {border-right:3px #222 solid}
	.border-bottom {border-bottom:3px #222 solid}
	.border-left{border-left:3px #222 solid}
	.border-top-bottom {border-bottom:3px #222 solid; border-top:3px #222 solid}
	.border-left-right {border-left:3px #222 solid; border-right:3px #222 solid}
	.border-all {border:3px #222 solid;}

	/* RED */
	tr:nth-child(3) td:nth-child(3), tr:nth-child(3) td:nth-child(4),
	tr:nth-child(3) td:nth-child(5), tr:nth-child(3) td:nth-child(6),
	tr:nth-child(3) td:nth-child(7), tr:nth-child(3) td:nth-child(8),
	tr:nth-child(3) td:nth-child(9), tr:nth-child(3) td:nth-child(10),
	tr:nth-child(10) td:nth-child(3), tr:nth-child(10) td:nth-child(4),
	tr:nth-child(10) td:nth-child(5), tr:nth-child(10) td:nth-child(6),
	tr:nth-child(10) td:nth-child(7), tr:nth-child(10) td:nth-child(8),
	tr:nth-child(10) td:nth-child(9), tr:nth-child(10) td:nth-child(10),
	tr:nth-child(4) td:nth-child(3),	
	tr:nth-child(5) td:nth-child(3), tr:nth-child(6) td:nth-child(3),
	tr:nth-child(7) td:nth-child(3), tr:nth-child(8) td:nth-child(3),
	tr:nth-child(9) td:nth-child(3), tr:nth-child(10) td:nth-child(3),
	tr:nth-child(4) td:nth-child(10),	
	tr:nth-child(5) td:nth-child(10), tr:nth-child(6) td:nth-child(10),
	tr:nth-child(7) td:nth-child(10), tr:nth-child(8) td:nth-child(10),
	tr:nth-child(9) td:nth-child(10), tr:nth-child(10) td:nth-child(10),	
	tr:nth-child(11) td:nth-child(11) {background-color: #EB2F4A;}
	
	/* BLUE */
	tr:nth-child(14) td:nth-child(3), tr:nth-child(14) td:nth-child(4),
	tr:nth-child(14) td:nth-child(5), tr:nth-child(14) td:nth-child(6),
	tr:nth-child(14) td:nth-child(7), tr:nth-child(14) td:nth-child(8),
	tr:nth-child(14) td:nth-child(9), tr:nth-child(14) td:nth-child(10),
	tr:nth-child(21) td:nth-child(3), tr:nth-child(21) td:nth-child(4),
	tr:nth-child(21) td:nth-child(5), tr:nth-child(21) td:nth-child(6),
	tr:nth-child(21) td:nth-child(7), tr:nth-child(21) td:nth-child(8),
	tr:nth-child(21) td:nth-child(9), tr:nth-child(21) td:nth-child(10),
	tr:nth-child(21) td:nth-child(3),	
	tr:nth-child(15) td:nth-child(3), tr:nth-child(16) td:nth-child(3),
	tr:nth-child(17) td:nth-child(3), tr:nth-child(18) td:nth-child(3),
	tr:nth-child(19) td:nth-child(3), tr:nth-child(20) td:nth-child(3),
	tr:nth-child(21) td:nth-child(10),	
	tr:nth-child(15) td:nth-child(10), tr:nth-child(16) td:nth-child(10),
	tr:nth-child(17) td:nth-child(10), tr:nth-child(18) td:nth-child(10),
	tr:nth-child(19) td:nth-child(10), tr:nth-child(20) td:nth-child(10),			
	tr:nth-child(13) td:nth-child(11) {background-color:#38bcf0;}

	/* GREEN */
	tr:nth-child(3) td:nth-child(21), tr:nth-child(3) td:nth-child(14),
	tr:nth-child(3) td:nth-child(15), tr:nth-child(3) td:nth-child(16),
	tr:nth-child(3) td:nth-child(17), tr:nth-child(3) td:nth-child(18),
	tr:nth-child(3) td:nth-child(19), tr:nth-child(3) td:nth-child(20),
	tr:nth-child(10) td:nth-child(21), tr:nth-child(10) td:nth-child(14),
	tr:nth-child(10) td:nth-child(15), tr:nth-child(10) td:nth-child(16),
	tr:nth-child(10) td:nth-child(17), tr:nth-child(10) td:nth-child(18),
	tr:nth-child(10) td:nth-child(19), tr:nth-child(10) td:nth-child(20),
	tr:nth-child(4) td:nth-child(14),	
	tr:nth-child(5) td:nth-child(14), tr:nth-child(6) td:nth-child(14),
	tr:nth-child(7) td:nth-child(14), tr:nth-child(8) td:nth-child(14),
	tr:nth-child(9) td:nth-child(14), tr:nth-child(10) td:nth-child(14),
	tr:nth-child(4) td:nth-child(21),	
	tr:nth-child(5) td:nth-child(21), tr:nth-child(6) td:nth-child(21),
	tr:nth-child(7) td:nth-child(21), tr:nth-child(8) td:nth-child(21),
	tr:nth-child(9) td:nth-child(21), tr:nth-child(10) td:nth-child(21),
	tr:nth-child(11) td:nth-child(13) {background-color: #65DC43;}	
	
	/* YELLOW */
	tr:nth-child(14) td:nth-child(21), tr:nth-child(14) td:nth-child(14),
	tr:nth-child(14) td:nth-child(15), tr:nth-child(14) td:nth-child(16),
	tr:nth-child(14) td:nth-child(17), tr:nth-child(14) td:nth-child(18),
	tr:nth-child(14) td:nth-child(19), tr:nth-child(14) td:nth-child(20),
	tr:nth-child(21) td:nth-child(21), tr:nth-child(21) td:nth-child(14),
	tr:nth-child(21) td:nth-child(15), tr:nth-child(21) td:nth-child(16),
	tr:nth-child(21) td:nth-child(17), tr:nth-child(21) td:nth-child(18),
	tr:nth-child(21) td:nth-child(19), tr:nth-child(21) td:nth-child(20),
	tr:nth-child(21) td:nth-child(14),	
	tr:nth-child(15) td:nth-child(14), tr:nth-child(16) td:nth-child(14),
	tr:nth-child(17) td:nth-child(14), tr:nth-child(18) td:nth-child(14),
	tr:nth-child(19) td:nth-child(14), tr:nth-child(20) td:nth-child(14),
	tr:nth-child(21) td:nth-child(21),	
	tr:nth-child(15) td:nth-child(21), tr:nth-child(16) td:nth-child(21),
	tr:nth-child(17) td:nth-child(21), tr:nth-child(18) td:nth-child(21),
	tr:nth-child(19) td:nth-child(21), tr:nth-child(20) td:nth-child(21),	
	tr:nth-child(13) td:nth-child(13) {background-color:#f7e03f;}
	


	tr.axis td, tr td:nth-child(12) {background:#d4eaf8}

	/* GREY - H and V columns */
	tr:first-child,
	td:first-child {background:#ccc}
	
	tr:first-child td:first-child,
	tr:nth-child(12) td:nth-child(12)
	{background: #fff;}
	


	.q1 {background:#FBEFDC}
	.q2 {background:#ECEAFF}
	<?php 
    //print 'tr:nth-child(' . $tfi['h'] . ') td:nth-child(' . $tfi['v'] . ')'; ?> tr td.active{		
		background-color: #B995FF !important;
		color: #000;
	}
</style>
<script src="http://code.jquery.com/jquery.js"></script>
<script>
$(document).ready(function(){
	function getUrlVars()
	{
		var vars = [], hash;
		var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
		for(var i = 0; i < hashes.length; i++)
		{
			hash = hashes[i].split('=');
			vars.push(hash[0]);
			vars[hash[0]] = hash[1];
		}
		return vars;
	}
	var kin = getUrlVars()["kin"];    
	$("td").each(function(){
		var cellText = $(this).text();
		if(cellText == kin) {
			$(this).addClass("active");
		}
	});
})
</script>

</head>

<body>
<table summary="441 cube with the space matrix overlay">
  <caption>
    Space Matrix
  </caption>
  <tr>
    <td>&nbsp;</td>
    <td>V1</td>
    <td>V2</td>
    <td>V3</td>
    <td>V4</td>
    <td>V5</td>
    <td>V6</td>
    <td>V7</td>
    <td>V8</td>
    <td>V9</td>
    <td>V10</td>
    <td>V11</td>
    <td>V12</td>
    <td>V13</td>
    <td>V14</td>
    <td>V15</td>
    <td>V16</td>
    <td>V17</td>
    <td>V18</td>
    <td>V19</td>
    <td>V20</td>
    <td>V21</td>
  </tr>
  <tr>
    <td>H1</td>
    <td class="border-left border-top">278</td>
    <td class="border-top">279</td>
    <td class="border-top">280</td>
    <td class="border-top">281</td>
    <td class="border-top">282</td>
    <td class="border-top">283</td>
    <td class="border-top">284</td>
    <td class="border-top">285</td>
    <td class="border-top">286</td>
    <td class="border-top">287</td>
    <td class="border-left-right border-top">421</td>
    <td class="border-top">304</td>
    <td class="border-top">305</td>
    <td class="border-top">306</td>
    <td class="border-top">306</td>
    <td class="border-top">308</td>
    <td class="border-top">309</td>
    <td class="border-top">310</td>
    <td class="border-top">311</td>
    <td class="border-top">312</td>
    <td class="border-right border-top">313</td>
  </tr>
  <tr>
    <td>H2</td>
    <td class="border-left">277</td>
    <td class="border-left border-top">16</td>
    <td class="border-top">50</td>
    <td class="border-top">9</td>
    <td class="border-top">55</td>
    <td class="border-top">11</td>
    <td class="border-top">53</td>
    <td class="border-top">14</td>
    <td class="border-right border-top">52</td>
    <td>288</td>
    <td class="border-left-right">422</td>
    <td>303</td>
    <td class="border-top border-left">80</td>
    <td class="border-top">114</td>
    <td class="border-top">73</td>
    <td class="border-top">119</td>
    <td class="border-top">75</td>
    <td class="border-top">117</td>
    <td class="border-top">78</td>
    <td class="border-top border-right">116</td>
    <td class="border-right">314</td>
  </tr>
  <tr>
    <td>H3</td>
    <td class="border-left">276</td>
    <td class="border-left">1</td>
    <td>63</td>
    <td>8</td>
    <td>58</td>
    <td>6</td>
    <td>60</td>
    <td>4</td>
    <td class="border-right">61</td>
    <td>289</td>
    <td class="border-left-right">423</td>
    <td>302</td>
    <td class="border-left">65</td>
    <td>127</td>
    <td>72</td>
    <td>122</td>
    <td>70</td>
    <td>124</td>
    <td>67</td>
    <td class="border-right">125</td>
    <td class="border-right">315</td>
  </tr>
  <tr>
    <td>H4</td>
    <td class="border-left">275</td>
    <td class="border-left">64</td>
    <td>2</td>
    <td>57</td>
    <td>7</td>
    <td>59</td>
    <td>5</td>
    <td>62</td>
    <td class="border-right">3</td>
    <td>290</td>
    <td class="border-left-right">424</td>
    <td>301</td>
    <td class="border-left">128</td>
    <td>66</td>
    <td>121</td>
    <td>71</td>
    <td>123</td>
    <td>69</td>
    <td>126</td>
    <td class="border-right">68</td>
    <td class="border-right">316</td>
  </tr>
  <tr>
    <td>H5</td>
    <td class="border-left">274</td>
    <td class="border-left">49</td>
    <td>15</td>
    <td>56</td>
    <td>10</td>
    <td>53</td>
    <td>12</td>
    <td>51</td>
    <td class="border-right">13</td>
    <td>291</td>
    <td class="border-left-right">425</td>
    <td>300</td>
    <td class="border-left">113</td>
    <td>79</td>
    <td>120</td>
    <td>74</td>
    <td>118</td>
    <td>76</td>
    <td>115</td>
    <td class="border-right">77</td>
    <td class="border-right">317</td>
  </tr>
  <tr>
    <td>H6</td>
    <td class="border-left">273</td>
    <td class="border-left">48</td>
    <td>18</td>
    <td>41</td>
    <td>23</td>
    <td>43</td>
    <td>21</td>
    <td>46</td>
    <td class="border-right">20</td>
    <td>292</td>
    <td class="border-left-right">426</td>
    <td>299</td>
    <td class="border-left">112</td>
    <td>82</td>
    <td>105</td>
    <td>87</td>
    <td>107</td>
    <td>85</td>
    <td>110</td>
    <td class="border-right">84</td>
    <td class="border-right">318</td>
  </tr>
  <tr>
    <td>H7</td>
    <td class="border-left">272</td>
    <td class="border-left">33</td>
    <td>31</td>
    <td>40</td>
    <td>26</td>
    <td>38</td>
    <td>28</td>
    <td>35</td>
    <td class="border-right">29</td>
    <td>293</td>
    <td class="border-left-right">427</td>
    <td>298</td>
    <td class="border-left">97</td>
    <td>95</td>
    <td>104</td>
    <td>90</td>
    <td>102</td>
    <td>92</td>
    <td>99</td>
    <td class="border-right">93</td>
    <td class="border-right">319</td>
  </tr>
  <tr>
    <td>H8</td>
    <td class="border-left">271</td>
    <td class="border-left">32</td>
    <td>34</td>
    <td>25</td>
    <td>39</td>
    <td>27</td>
    <td>37</td>
    <td>30</td>
    <td class="border-right">36</td>
    <td>294</td>
    <td class="border-left-right">428</td>
    <td>297</td>
    <td class="border-left">96</td>
    <td>98</td>
    <td>89</td>
    <td>103</td>
    <td>91</td>
    <td>101</td>
    <td>94</td>
    <td class="border-right">100</td>
    <td class="border-right">320</td>
  </tr>
  <tr>
    <td>H9</td>
    <td class="border-left">270</td>
    <td class="border-left border-bottom">17</td>
    <td class="border-bottom">47</td>
    <td class="border-bottom">24</td>
    <td class="border-bottom">42</td>
    <td class="border-bottom">22</td>
    <td class="border-bottom">44</td>
    <td class="border-bottom">19</td>
    <td class="border-right border-bottom">45</td>
    <td>295</td>
    <td class="border-left-right">429</td>
    <td>296</td>
    <td class="border-bottom border-left">81</td>
    <td class="border-bottom">111</td>
    <td class="border-bottom">88</td>
    <td class="border-bottom">106</td>
    <td class="border-bottom">86</td>
    <td class="border-bottom">108</td>
    <td class="border-bottom">83</td>
    <td class="border-bottom border-right">109</td>
    <td class="border-right">321</td>
  </tr>
  <tr>
    <td>H10</td>
    <td class="border-left">269</td>
    <td>268</td>
    <td>267</td>
    <td>266</td>
    <td>265</td>
    <td>264</td>
    <td>263</td>
    <td>262</td>
    <td>261</td>
    <td class="border-all">257</td>
    <td class="border-left-right">430</td>
    <td class="border-all">258</td>
    <td>330</td>
    <td>329</td>
    <td>328</td>
    <td>327</td>
    <td>326</td>
    <td>325</td>
    <td>324</td>
    <td>323</td>
    <td class="border-right">322</td>
  </tr>
  <tr class="axis">
    <td >H11</td>
    <td class="border-top-bottom border-left">401</td>
    <td class="border-top-bottom">402</td>
    <td class="border-top-bottom">403</td>
    <td class="border-top-bottom">404</td>
    <td class="border-top-bottom">405</td>
    <td class="border-top-bottom">406</td>
    <td class="border-top-bottom">407</td>
    <td class="border-top-bottom">408</td>
    <td class="border-top-bottom">409</td>
    <td class="border-top-bottom">410</td>
    <td class="border-all">441</td>
    <td class="border-top-bottom">420</td>
    <td class="border-top-bottom">419</td>
    <td class="border-top-bottom">418</td>
    <td class="border-top-bottom">417</td>
    <td class="border-top-bottom">416</td>
    <td class="border-top-bottom">415</td>
    <td class="border-top-bottom">414</td>
    <td class="border-top-bottom">413</td>
    <td class="border-top-bottom">412</td>
    <td class="border-top-bottom border-right">411</td>
  </tr>
  <tr>
    <td>H12</td>
    <td class="border-left">339</td>
    <td>338</td>
    <td>337</td>
    <td>336</td>
    <td>335</td>
    <td>334</td>
    <td>333</td>
    <td>332</td>
    <td>331</td>
    <td class="border-all">259</td>
    <td class="border-left-right">440</td>
    <td class="border-all">260</td>
    <td>400</td>
    <td>399</td>
    <td>398</td>
    <td>397</td>
    <td>396</td>
    <td>395</td>
    <td>394</td>
    <td>393</td>
    <td class="border-right">392</td>
  </tr>
  <tr>
    <td>H13</td>
    <td class="border-left">340</td>
    <td class="border-top border-left">144</td>
    <td class="border-top">178</td>
    <td class="border-top">137</td>
    <td class="border-top">183</td>
    <td class="border-top">139</td>
    <td class="border-top">181</td>
    <td class="border-top">142</td>
    <td class="border-top border-right">180</td>
    <td>365</td>
    <td class="border-left-right">439</td>
    <td>366</td>
    <td class="border-top border-left">208</td>
    <td class="border-top">242</td>
    <td class="border-top">201</td>
    <td class="border-top">247</td>
    <td class="border-top">203</td>
    <td class="border-top">245</td>
    <td class="border-top">206</td>
    <td class="border-top border-right">244</td>
    <td class="border-right">391</td>
  </tr>
  <tr>
    <td>H14</td>
    <td class="border-left">341</td>
    <td class="border-left">129</td>
    <td>191</td>
    <td>136</td>
    <td>186</td>
    <td>134</td>
    <td>188</td>
    <td>131</td>
    <td class="border-right">189</td>
    <td>364</td>
    <td class="border-left-right">438</td>
    <td>367</td>
    <td class="border-left">193</td>
    <td>255</td>
    <td>200</td>
    <td>250</td>
    <td>198</td>
    <td>252</td>
    <td>195</td>
    <td class="border-right">253</td>
    <td class="border-right">390</td>
  </tr>
  <tr>
    <td>H15</td>
    <td class="border-left">342</td>
    <td class="border-left">192</td>
    <td>130</td>
    <td>185</td>
    <td>135</td>
    <td>187</td>
    <td>133</td>
    <td>190</td>
    <td class="border-right">132</td>
    <td>363</td>
    <td class="border-left-right">437</td>
    <td>368</td>
    <td class="border-left">256</td>
    <td>194</td>
    <td>249</td>
    <td>199</td>
    <td>251</td>
    <td>197</td>
    <td>354</td>
    <td class="border-right">196</td>
    <td class="border-right">389</td>
  </tr>
  <tr>
    <td>H16</td>
    <td class="border-left">343</td>
    <td class="border-left">177</td>
    <td>143</td>
    <td>184</td>
    <td>138</td>
    <td>182</td>
    <td>140</td>
    <td>179</td>
    <td class="border-right">141</td>
    <td>362</td>
    <td class="border-left-right">436</td>
    <td>369</td>
    <td class="border-left">241</td>
    <td>207</td>
    <td>248</td>
    <td>202</td>
    <td>246</td>
    <td>204</td>
    <td>243</td>
    <td class="border-right">205</td>
    <td class="border-right">388</td>
  </tr>
  <tr>
    <td>H17</td>
    <td class="border-left">344</td>
    <td class="border-left">176</td>
    <td>146</td>
    <td>169</td>
    <td>151</td>
    <td>171</td>
    <td>149</td>
    <td>174</td>
    <td class="border-right">148</td>
    <td>361</td>
    <td class="border-left-right">435</td>
    <td>370</td>
    <td class="border-left">240</td>
    <td>210</td>
    <td>233</td>
    <td>215</td>
    <td>235</td>
    <td>213</td>
    <td>238</td>
    <td class="border-right">212</td>
    <td class="border-right">387</td>
  </tr>
  <tr>
    <td>H18</td>
    <td class="border-left">345</td>
    <td class="border-left">161</td>
    <td>159</td>
    <td>168</td>
    <td>154</td>
    <td>166</td>
    <td>156</td>
    <td>163</td>
    <td class="border-right">157</td>
    <td>360</td>
    <td class="border-left-right">434</td>
    <td>371</td>
    <td class="border-left">225</td>
    <td>223</td>
    <td>232</td>
    <td>218</td>
    <td>230</td>
    <td>220</td>
    <td>227</td>
    <td class="border-right">221</td>
    <td class="border-right">386</td>
  </tr>
  <tr>
    <td>H19</td>
    <td class="border-left">346</td>
    <td class="border-left">160</td>
    <td>162</td>
    <td>153</td>
    <td>167</td>
    <td>155</td>
    <td>165</td>
    <td>158</td>
    <td class="border-right">164</td>
    <td>359</td>
    <td class="border-left-right">433</td>
    <td>372</td>
    <td class="border-left">224</td>
    <td>226</td>
    <td>217</td>
    <td>231</td>
    <td>219</td>
    <td>229</td>
    <td>222</td>
    <td class="border-right">228</td>
    <td class="border-right">385</td>
  </tr>
  <tr>
    <td>H20</td>
    <td class="border-left">347</td>
    <td class="border-bottom border-left">145</td>
    <td class="border-bottom">175</td>
    <td class="border-bottom">152</td>
    <td class="border-bottom">170</td>
    <td class="border-bottom">150</td>
    <td class="border-bottom">172</td>
    <td class="border-bottom">147</td>
    <td class="border-bottom border-right">173</td>
    <td>358</td>
    <td class="border-left-right">432</td>
    <td>373</td>
    <td class="border-bottom border-left">209</td>
    <td class="border-bottom">239</td>
    <td class="border-bottom">216</td>
    <td class="border-bottom">234</td>
    <td class="border-bottom">214</td>
    <td class="border-bottom">236</td>
    <td class="border-bottom">211</td>
    <td class="border-bottom border-right">237</td>
    <td class="border-right">384</td>
  </tr>
  <tr>
    <td>H21</td>
    <td class="border-bottom border-left">348</td>
    <td class="border-bottom">349</td>
    <td class="border-bottom">350</td>
    <td class="border-bottom">351</td>
    <td class="border-bottom">352</td>
    <td class="border-bottom">353</td>
    <td class="border-bottom">354</td>
    <td class="border-bottom">355</td>
    <td class="border-bottom">356</td>
    <td class="border-bottom">357</td>
    <td class="border-bottom border-left-right">431</td>
    <td class="border-bottom">374</td>
    <td class="border-bottom">375</td>
    <td class="border-bottom">376</td>
    <td class="border-bottom">377</td>
    <td class="border-bottom">378</td>
    <td class="border-bottom">379</td>
    <td class="border-bottom">380</td>
    <td class="border-bottom">381</td>
    <td class="border-bottom">382</td>
    <td class="border-bottom border-right">383</td>
  </tr>
</table>
</body>
</html>
