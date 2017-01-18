<?php include('441.php'); ?>
<!DOCTYPE html>
<html charset="UTF-8">
<head>
<title>441 Cube Time Matrix - 13:20 Time.net</title>
<style>
	table {border-collapse:collapse; font-size:14px}
	td {width: 28px; height: 28px; padding: 2px; text-align:center; border: 1px #222 solid}
	.border-top {border-top:3px #222 solid}
	.border-right {border-right:3px #222 solid}
	.border-bottom {border-bottom:3px #222 solid}
	.border-left{border-left:3px #222 solid}
	.border-top-bottom {border-bottom:3px #222 solid; border-top:3px #222 solid}
	.border-left-right {border-left:3px #222 solid; border-right:3px #222 solid}
	.border-all {border:3px #222 solid;}
	tr:nth-child(2) td:nth-child(-n+8), tr:nth-child(2) td:nth-child(n+16),
	tr:nth-child(n+16) td:nth-child(2), tr:nth-child(n+16) td:nth-child(2),
	tr:nth-child(8) td:nth-child(-n+8), tr:nth-child(8) td:nth-child(n+16),
	tr:nth-child(16) td:nth-child(-n+8), tr:nth-child(16) td:nth-child(n+16),	
	tr:nth-child(-n+9) td:nth-child(2), tr:nth-child(-n+9) td:nth-child(16),
	tr:nth-child(n+16) td:nth-child(8), tr:nth-child(n+16) td:nth-child(16), tr:nth-child(n+16) td:last-child,
	tr:nth-child(-n+8) td:nth-child(8), tr:nth-child(-n+8) td:last-child,
	tr:last-child td:nth-child(-n+8), tr:last-child td:nth-child(n+16)  {background:#fea961 }

	tr:nth-child(9) td, tr:nth-child(15) td, tr td:nth-child(9), tr td:nth-child(15),
	tr:nth-child(9) td:nth-child(2), tr:nth-child(10) td:nth-child(2),
	tr:nth-child(11) td:nth-child(2), tr:nth-child(12) td:nth-child(2),
	tr:nth-child(13) td:last-child, tr:nth-child(10) td:last-child,
	tr:nth-child(14) td:last-child, tr:nth-child(11) td:last-child,
	tr:nth-child(8) td:nth-child(10), tr:nth-child(8) td:nth-child(11), 
	tr:nth-child(8) td:nth-child(13), tr:nth-child(8) td:nth-child(14), 
	tr:nth-child(16) td:nth-child(9), tr:nth-child(16) td:nth-child(10),
	tr:nth-child(10) td:nth-child(8), tr:nth-child(11) td:nth-child(8),  
	tr:nth-child(12) td:nth-child(8), tr:nth-child(13) td:nth-child(8),  	tr:nth-child(14) td:nth-child(8),  	
	tr:nth-child(16) td:nth-child(11), tr:nth-child(16) td:nth-child(13), tr:nth-child(16) td:nth-child(14),
	tr:nth-child(2) td:nth-child(10),tr:nth-child(2) td:nth-child(12),tr:nth-child(2) td:nth-child(11),
	tr:nth-child(2) td:nth-child(13),tr:nth-child(2) td:nth-child(14),tr:nth-child(2) td:nth-child(9),
	tr:nth-child(9) td:nth-child(16), tr:nth-child(10) td:nth-child(16), tr:nth-child(11) td:nth-child(16),
	tr:nth-child(13) td:nth-child(16), tr:nth-child(14) td:nth-child(16),
	tr:last-child td:nth-child(11),tr:last-child td:nth-child(14),
	tr:last-child td:nth-child(10), 
	tr:nth-child(13) td:nth-child(2),tr:nth-child(14) td:nth-child(2),		
	tr:last-child td:nth-child(12),tr:last-child td:nth-child(13)	 {background:#b995ff }	

	tr.axis td, td:nth-child(5), tr td:nth-child(12), tr td:nth-child(19),
	tr:nth-child(2) td:nth-child(5), tr:nth-child(2) td:nth-child(19), 
	tr:nth-child(4) td:nth-child(5), tr:nth-child(4) td:nth-child(5),
	tr:nth-child(8) td:nth-child(5), tr:nth-child(8) td:nth-child(19),	 
	tr:nth-child(16) td:nth-child(5), tr:nth-child(19) td:last-child, 
	tr:nth-child(19) td:nth-child(2), tr:nth-child(19) td:nth-child(8),		 
	tr:last-child td:nth-child(19), 	tr:last-child td:nth-child(12),
	tr:nth-child(19) td:nth-child(16), tr:nth-child(5) td:nth-child(2),		 	
	tr:last-child td:nth-child(5), tr:nth-child(12) td:nth-child(8),		 	
	tr:nth-child(15) td:nth-child(5), tr:nth-child(16) td:nth-child(19),		 	
	tr:nth-child(9) td:nth-child(5), tr:nth-child(5) td:nth-child(8), tr:nth-child(12) td:nth-child(2),
	tr:nth-child(5) td:nth-child(16), tr:nth-child(5) td:last-child {background:#91e0ff}

	tr:nth-child(2) td:nth-child(1), tr:nth-child(1) td:nth-child(2),
	tr:nth-child(8) td:nth-child(1), tr:nth-child(1) td:nth-child(8),
	tr:nth-child(9) td:nth-child(1), tr:nth-child(1) td:nth-child(9),			
	tr:nth-child(15) td:nth-child(1), tr:nth-child(1) td:nth-child(15),				
	tr:nth-child(16) td:nth-child(1), tr:nth-child(1) td:nth-child(16),					
	tr:last-child td:nth-child(1), tr:nth-child(1) td:last-child,				
	tr:nth-child(5) td:nth-child(5), tr:nth-child(5) td:nth-child(12), tr:nth-child(5) td:nth-child(19),
	tr:nth-child(12) td:nth-child(5), tr:nth-child(12) td:nth-child(12), tr:nth-child(12) td:nth-child(19),
	tr:nth-child(19) td:nth-child(5), tr:nth-child(19) td:nth-child(12), tr:nth-child(19) td:nth-child(19)	
	{background: #fff;}

	.q1 {background:#FBEFDC}
	.q2 {background:#ECEAFF}
    <?php 
        $tfi['v']++;
    ?>
	<?php print 'tr:nth-child(' . $tfi['h'] . ') td:nth-child(' . $tfi['v'] . ')'; ?> {		
		background: #F0C !important;		
	}
</style>
<script src="http://code.jquery.com/jquery.js"></script>
</head>

<body>
<table summary="441 cube with the time matrix overlay">
  <caption>
    Time Matrix
  </caption>
  <tr>
    <td class="border-top border-left">&nbsp;</td>
    <td class="border-top border-left">V1</td>
    <td class="border-top">V2</td>
    <td class="border-top">V3</td>
    <td class="border-left-right border-top">V4</td>
    <td class="border-top">V5</td>
    <td class="border-top">V6</td>
    <td class="border-top border-right">V7</td>
    <td class="border-top">V8</td>
    <td class="border-top">V9</td>
    <td class="border-top">V10</td>
    <td class="border-left-right border-top">V11</td>
    <td class="border-top">V12</td>
    <td class="border-top">V13</td>
    <td class="border-top">V14</td>
    <td class="border-top border-left">V15</td>
    <td class="border-top">V16</td>
    <td class="border-top">V17</td>
    <td class="border-left-right border-top">V18</td>
    <td class="border-top">V19</td>
    <td class="border-top">V20</td>
    <td class="border-top border-right">V21</td>
  </tr>
  <tr>
    <td class="border-top border-left">H1</td>
    <td class="border-top border-left">1</td>
    <td class="border-top">2</td>
    <td class="border-top">3</td>
    <td class="border-left-right border-top">7</td>
    <td class="border-top">10</td>
    <td class="border-top">11</td>
    <td class="border-top border-right">12</td>
    <td class="border-top">217</td>
    <td class="border-top">218</td>
    <td class="border-top">219</td>
    <td class="border-left-right border-top">85</td>
    <td class="border-top">226</td>
    <td class="border-top">227</td>
    <td class="border-top">228</td>
    <td class="border-top border-left">37</td>
    <td class="border-top">38</td>
    <td class="border-top">39</td>
    <td class="border-left-right border-top">20</td>
    <td class="border-top">46</td>
    <td class="border-top">47</td>
    <td class="border-top border-right">48</td>
  </tr>
  <tr>
    <td class="border-left">H2</td>
    <td class="border-left">4</td>
    <td>5</td>
    <td>6</td>
    <td class="border-left-right">8</td>
    <td>13</td>
    <td>14</td>
    <td class="border-right">15</td>
    <td>220</td>
    <td>221</td>
    <td>222</td>
    <td class="border-left-right">86</td>
    <td>229</td>
    <td>230</td>
    <td>231</td>
    <td class="border-left">40</td>
    <td>41</td>
    <td>42</td>
    <td class="border-left-right">21</td>
    <td>49</td>
    <td>50</td>
    <td class="border-right">51</td>
  </tr>
  <tr>
    <td class="border-left">H3</td>
    <td class="border-left">7</td>
    <td>8</td>
    <td>9</td>
    <td class="border-left-right">9</td>
    <td>16</td>
    <td>17</td>
    <td class="border-right">18</td>
    <td>223</td>
    <td>224</td>
    <td>225</td>
    <td class="border-left-right">87</td>
    <td>232</td>
    <td>233</td>
    <td>234</td>
    <td class="border-left">43</td>
    <td>44</td>
    <td>45</td>
    <td class="border-left-right">22</td>
    <td>52</td>
    <td>53</td>
    <td class="border-right">54</td>
  </tr>
  <tr class="axis">
    <td class="border-top-bottom border-left">H4</td>
    <td class="border-top-bottom border-left">1</td>
    <td class="border-top-bottom">2</td>
    <td class="border-top-bottom">3</td>
    <td class="border-all">13</td>
    <td class="border-top-bottom">6</td>
    <td class="border-top-bottom">5</td>
    <td class="border-top-bottom border-right">4</td>
    <td class="border-top-bottom">79</td>
    <td class="border-top-bottom">80</td>
    <td class="border-top-bottom">81</td>
    <td class="border-all">91</td>
    <td class="border-top-bottom">84</td>
    <td class="border-top-bottom">83</td>
    <td class="border-top-bottom">82</td>
    <td class="border-top-bottom border-left">14</td>
    <td class="border-top-bottom">15</td>
    <td class="border-top-bottom">16</td>
    <td class="border-all">26</td>
    <td class="border-top-bottom">19</td>
    <td class="border-top-bottom">18</td>
    <td class="border-top-bottom border-right">17</td>
  </tr>
  <tr>
    <td class="border-left">H5</td>
    <td class="border-left">19</td>
    <td>20</td>
    <td>21</td>
    <td class="border-left-right">12</td>
    <td>28</td>
    <td>29</td>
    <td class="border-right">30</td>
    <td>235</td>
    <td>236</td>
    <td>237</td>
    <td class="border-left-right">90</td>
    <td>244</td>
    <td>245</td>
    <td>246</td>
    <td class="border-left">55</td>
    <td>56</td>
    <td>57</td>
    <td class="border-left-right">25</td>
    <td>64</td>
    <td>65</td>
    <td class="border-right">66</td>
  </tr>
  <tr>
    <td class="border-left">H6</td>
    <td class="border-left">22</td>
    <td>23</td>
    <td>24</td>
    <td class="border-left-right">11</td>
    <td>31</td>
    <td>32</td>
    <td class="border-right">33</td>
    <td>238</td>
    <td>239</td>
    <td>240</td>
    <td class="border-left-right">89</td>
    <td>247</td>
    <td>248</td>
    <td>249</td>
    <td class="border-left">58</td>
    <td>59</td>
    <td>60</td>
    <td class="border-left-right">24</td>
    <td>67</td>
    <td>68</td>
    <td class="border-right">69</td>
  </tr>
  <tr>
    <td class="border-left border-bottom">H7</td>
    <td class="border-left border-bottom">25</td>
    <td class="border-bottom">26</td>
    <td class="border-bottom">27</td>
    <td class="border-left-right border-bottom">10</td>
    <td class="border-bottom">34</td>
    <td class="border-bottom">35</td>
    <td class="border-right border-bottom">36</td>
    <td class="border-bottom">241</td>
    <td class="border-bottom">242</td>
    <td class="border-bottom">243</td>
    <td class="border-left-right border-bottom">88</td>
    <td class="border-bottom">250</td>
    <td class="border-bottom">251</td>
    <td class="border-bottom">252</td>
    <td class="border-left border-bottom">61</td>
    <td class="border-bottom">62</td>
    <td class="border-bottom">63</td>
    <td class="border-left-right border-bottom">23</td>
    <td class="border-bottom">70</td>
    <td class="border-bottom">71</td>
    <td class="border-bottom border-right">72</td>
  </tr>
  <tr>
    <td class="border-left">H8</td>
    <td class="border-left">145</td>
    <td>146</td>
    <td>147</td>
    <td class="border-left-right">59</td>
    <td>154</td>
    <td>155</td>
    <td class="border-right">156</td>
    <td>289</td>
    <td>290</td>
    <td>291</td>
    <td class="border-left-right">111</td>
    <td>298</td>
    <td>299</td>
    <td>300</td>
    <td class="border-left">181</td>
    <td>182</td>
    <td>183</td>
    <td class="border-left-right">72</td>
    <td>190</td>
    <td>191</td>
    <td class="border-right">192</td>
  </tr>
  <tr>
    <td class="border-left">H9</td>
    <td class="border-left">148</td>
    <td>149</td>
    <td>150</td>
    <td class="border-left-right">60</td>
    <td>157</td>
    <td>158</td>
    <td class="border-right">159</td>
    <td>292</td>
    <td>293</td>
    <td>294</td>
    <td class="border-left-right">112</td>
    <td>301</td>
    <td>302</td>
    <td>303</td>
    <td class="border-left">184</td>
    <td>185</td>
    <td>186</td>
    <td class="border-left-right">73</td>
    <td>193</td>
    <td>194</td>
    <td class="border-right">195</td>
  </tr>
  <tr>
    <td class="border-left">H10</td>
    <td class="border-left">151</td>
    <td>152</td>
    <td>153</td>
    <td class="border-left-right">61</td>
    <td>160</td>
    <td>161</td>
    <td class="border-right">162</td>
    <td>295</td>
    <td>296</td>
    <td>297</td>
    <td class="border-left-right">113</td>
    <td>304</td>
    <td>305</td>
    <td>306</td>
    <td class="border-left">187</td>
    <td>188</td>
    <td>189</td>
    <td class="border-left-right">74</td>
    <td>196</td>
    <td>197</td>
    <td class="border-right">198</td>
  </tr>
  <tr class="axis">
    <td class="border-top-bottom border-left">H11</td>
    <td class="border-top-bottom border-left">53</td>
    <td class="border-top-bottom">54</td>
    <td class="border-top-bottom">55</td>
    <td class="border-all">65</td>
    <td class="border-top-bottom">58</td>
    <td class="border-top-bottom">57</td>
    <td class="border-top-bottom border-right">56</td>
    <td class="border-top-bottom">105</td>
    <td class="border-top-bottom">106    </td>
    <td class="border-top-bottom">107    </td>
    <td class="border-all">117</td>
    <td class="border-top-bottom">110</td>
    <td class="border-top-bottom">109    </td>
    <td class="border-top-bottom">108    </td>
    <td class="border-top-bottom border-left">66</td>
    <td class="border-top-bottom">67</td>
    <td class="border-top-bottom">68</td>
    <td class="border-all">78</td>
    <td class="border-top-bottom">71</td>
    <td class="border-top-bottom">70</td>
    <td class="border-top-bottom border-right">69</td>
  </tr>
  <tr>
    <td class="border-left">H12</td>
    <td class="border-left">163</td>
    <td>164</td>
    <td>165</td>
    <td class="border-left-right">64</td>
    <td>172</td>
    <td>173</td>
    <td class="border-right">174</td>
    <td>307</td>
    <td>308</td>
    <td>309</td>
    <td class="border-left-right">116</td>
    <td>316</td>
    <td>317</td>
    <td>318</td>
    <td class="border-left">199</td>
    <td>200</td>
    <td>201</td>
    <td class="border-left-right">77</td>
    <td>208</td>
    <td>209</td>
    <td class="border-right">210</td>
  </tr>
  <tr>
    <td class="border-left">H13</td>
    <td class="border-left">166</td>
    <td>167</td>
    <td>168</td>
    <td class="border-left-right">63</td>
    <td>175</td>
    <td>176</td>
    <td class="border-right">177</td>
    <td>310</td>
    <td>311</td>
    <td>312</td>
    <td class="border-left-right">115</td>
    <td>319</td>
    <td>320</td>
    <td>321</td>
    <td class="border-left">202</td>
    <td>203</td>
    <td>204</td>
    <td class="border-left-right">76</td>
    <td>211</td>
    <td>212</td>
    <td class="border-right">213</td>
  </tr>
  <tr>
    <td class="border-left">H14</td>
    <td class="border-left">169</td>
    <td>170</td>
    <td>171</td>
    <td class="border-left-right">62</td>
    <td>178</td>
    <td>179</td>
    <td class="border-right">180</td>
    <td>313</td>
    <td>314</td>
    <td>315</td>
    <td class="border-left-right">114</td>
    <td>322</td>
    <td>323</td>
    <td>324</td>
    <td class="border-left">205</td>
    <td>206</td>
    <td>207</td>
    <td class="border-left-right">75</td>
    <td>214</td>
    <td>215</td>
    <td class="border-right">216</td>
  </tr>
  <tr>
    <td class="border-left border-top">H15</td>
    <td class="border-left border-top">73</td>
    <td class="border-top">74</td>
    <td class="border-top">75</td>
    <td class="border-top border-left-right">33</td>
    <td class="border-top">82</td>
    <td class="border-top">83</td>
    <td class="border-right border-top">84</td>
    <td class="border-top">253</td>
    <td class="border-top">254</td>
    <td class="border-top">255</td>
    <td class="border-left-right border-top">98</td>
    <td class="border-top">262</td>
    <td class="border-top">263</td>
    <td class="border-top">264</td>
    <td class="border-left border-top">109</td>
    <td class="border-top">110</td>
    <td class="border-top">111</td>
    <td class="border-top border-left-right">46</td>
    <td class="border-top">118</td>
    <td class="border-top">119</td>
    <td class="border-right border-top">120</td>
  </tr>
  <tr>
    <td class="border-left">H16</td>
    <td class="border-left">76</td>
    <td>77</td>
    <td>78</td>
    <td class="border-left-right">34</td>
    <td>85</td>
    <td>86</td>
    <td class="border-right">87</td>
    <td>256</td>
    <td>257</td>
    <td>258</td>
    <td class="border-left-right">99</td>
    <td>265</td>
    <td>266</td>
    <td>267</td>
    <td class="border-left">112</td>
    <td>113</td>
    <td>114</td>
    <td class="border-left-right">47</td>
    <td>121</td>
    <td>122</td>
    <td class="border-right">123</td>
  </tr>
  <tr>
    <td class="border-left">H17</td>
    <td class="border-left">79</td>
    <td>80</td>
    <td>81</td>
    <td class="border-left-right">35</td>
    <td>88</td>
    <td>89</td>
    <td class="border-right">90</td>
    <td>259</td>
    <td>260</td>
    <td>261</td>
    <td class="border-left-right">100</td>
    <td>268</td>
    <td>269</td>
    <td>270</td>
    <td class="border-left">115</td>
    <td>116</td>
    <td>117</td>
    <td class="border-left-right">48</td>
    <td>124</td>
    <td>125</td>
    <td class="border-right">126</td>
  </tr>
  <tr class="axis">
    <td class="border-left border-top-bottom">H18</td>
    <td class="border-left border-top-bottom">27</td>
    <td class="border-top-bottom">28</td>
    <td class="border-top-bottom">29</td>
    <td class="border-all">39</td>
    <td class="border-top-bottom">32</td>
    <td class="border-top-bottom">31</td>
    <td class="border-right border-top-bottom">30</td>
    <td class="border-top-bottom">92</td>
    <td class="border-top-bottom">93</td>
    <td class="border-top-bottom">94</td>
    <td class="border-all">104</td>
    <td class="border-top-bottom">97</td>
    <td class="border-top-bottom">96</td>
    <td class="border-top-bottom">95</td>
    <td class="border-left border-top-bottom">27</td>
    <td class="border-top-bottom">28</td>
    <td class="border-top-bottom">29</td>
    <td class="border-all">52</td>
    <td class="border-top-bottom">32</td>
    <td class="border-top-bottom">31</td>
    <td class="border-right border-top-bottom">30</td>
  </tr>
  <tr>
    <td class="border-left">H19</td>
    <td class="border-left">91</td>
    <td>92</td>
    <td>93</td>
    <td class="border-left-right">38</td>
    <td>100</td>
    <td>101</td>
    <td class="border-right">102</td>
    <td>271</td>
    <td>272</td>
    <td>273</td>
    <td class="border-left-right">103</td>
    <td>280</td>
    <td>281</td>
    <td>282</td>
    <td class="border-left">127</td>
    <td>128</td>
    <td>129</td>
    <td class="border-left-right">51</td>
    <td>136</td>
    <td>137</td>
    <td class="border-right">138</td>
  </tr>
  <tr>
    <td class="border-left">H20</td>
    <td class="border-left">94</td>
    <td>95</td>
    <td>96</td>
    <td class="border-left-right">37</td>
    <td>103</td>
    <td>104</td>
    <td class="border-right">105</td>
    <td>274</td>
    <td>275</td>
    <td>276</td>
    <td class="border-left-right">102</td>
    <td>283</td>
    <td>284</td>
    <td>285</td>
    <td class="border-left">130</td>
    <td>131</td>
    <td>132</td>
    <td class="border-left-right">50</td>
    <td>139</td>
    <td>140</td>
    <td class="border-right">141</td>
  </tr>
  <tr>
    <td class="border-left border-bottom">H21</td>
    <td class="border-left border-bottom">97</td>
    <td class="border-bottom">98</td>
    <td class="border-bottom">99</td>
    <td class="border-bottom border-left-right">36</td>
    <td class="border-bottom">106</td>
    <td class="border-bottom">107</td>
    <td class="border-bottom border-right">108</td>
    <td class="border-bottom">277</td>
    <td class="border-bottom">278</td>
    <td class="border-bottom">279</td>
    <td class="border-left-right border-bottom">101</td>
    <td class="border-bottom">286</td>
    <td class="border-bottom">287</td>
    <td class="border-bottom">288</td>
    <td class="border-left border-bottom">133</td>
    <td class="border-bottom">134</td>
    <td class="border-bottom">135</td>
    <td class="border-bottom border-left-right">49</td>
    <td class="border-bottom">142</td>
    <td class="border-bottom">143</td>
    <td class="border-bottom border-right">144</td>
  </tr>
</table>
</body>
</html>
