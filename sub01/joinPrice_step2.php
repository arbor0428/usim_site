<?
	include '../header.php';
?>
	<style>
		.subWrap02 .joinStepShow li:nth-child(3) {
			padding: 15px 31px;
			background: linear-gradient(90deg, rgba(0,0,0,1) 0%, rgba(45,175,246,1) 0%, rgba(92,40,255,1) 100%);
			color: #fff;
			box-shadow: 0 3px 5px 0 #dedede;
			-webkit-box-shadow: 0 3px 5px 0 #dedede;
		}
		@media (max-width:1023px){
			.subWrap02 .m_joinStepShow li:nth-child(3) {
				background: linear-gradient(90deg, rgba(0,0,0,1) 0%, rgba(45,175,246,1) 0%, rgba(92,40,255,1) 100%);
				color: #fff;
				box-shadow: 0 3px 5px 0 #dedede;
				-webkit-box-shadow: 0 3px 5px 0 #dedede;
			}
		}
	</style>
	<div class="subWrap02 gry01">
		<div class="wht01">
			<h3 class="sub_tit bold2">요금제 가입</h3>
			<!--선불 가입일때 보여져야 함-->
			<?
				include 'prePayBar.php';
			?>

<!-- 			후불 가입일때 보여져야 함
			<?
				include 'afterPayBar.php';
			?> -->
			<div class="c_center">
				<p class="step_tit">2. 본인 확인</p>
			</div>
		</div>
		<div class="wht01 p-72 m_28 m-p0">
			<div class="c_center">
				<p class="joinSubTit">가입자 정보를 입력해주세요.</p>
			</div>
		</div>
		<div class="wht01 p_20 p-50">
			<div class="c_center">
				<div class="kindBtnWrap">
					<ul class="kindBox dp_sb dp_c">
						<li>
							<span>가입자확인</span>
						</li>
						<li>
							<label class="dp_sb dp_c dp_cc active" for="c_box1_1"><input type="radio" name="c_box1" id="c_box1_1" onclick="c_box1(this.name,0);">내국인</label>
						</li>
						<li>
							<label class="dp_sb dp_c dp_cc" for="c_box1_2"><input type="radio" name="c_box1" id="c_box1_2" onclick="c_box1(this.name,1);">외국인</label>
						</li>
					</ul>
				</div>
			</div>
		</div>

		<div class="nationKindWrap">
			<!--내국인 선택시 보여져야 함-->
			<div class="nationKind">
				<div class="wht01 m_28 p-20 p_20">
					<div class="c_center">
						<div class="inputWrap">
							<label class="minibx" for="name">가입자 이름</label>
							<input id="name" type="text" placeholder="이름(NAME)">
						</div>
						<div class="inputWrap">
							<label class="minibx" for="regiNum">주민등록번호</label>
							<input id="regiNum" type="text">
						</div>
					</div>
				</div>
				<div class="wht01 m-28 p_20 p-20">
					<div class="c_center">
						<div class="kindBtnWrap">
							<ul class="kindBox mb40 dp_sb dp_c">
								<li>
									<span>신분증</span>
								</li>
								<li>
									<label class="dp_sb dp_c dp_cc active" for="c_box2_1"><input type="radio" name="c_box2" id="c_box2_1" onclick="c_box2(this.name,0);">주민등록증</label>
								</li>
								<li>
									<label class="dp_sb dp_c dp_cc" for="c_box2_2"><input type="radio" name="c_box2" id="c_box2_2" onclick="c_box2(this.name,1);">운전면허증</label>
								</li>
							</ul>
						</div>

						<div class="kindContWrap">
							<!--주민등록증 선택시 보여져야 함-->
							<div class="kindCont">
								<div class="inputWrap">
									<label class="minibx" for="issueNum">발급일자</label>
									<div class="dateWrap dp_sb">
										<select>
											<option>YYYY</option>
											<option>2000</option>
										</select>
										<select>
											<option>MM</option>
											<option>01</option>
											<option>02</option>
											<option>03</option>
											<option>04</option>
											<option>05</option>
											<option>06</option>
											<option>07</option>
											<option>08</option>
											<option>09</option>
											<option>10</option>
											<option>11</option>
											<option>12</option>
										</select>
										<select>
											<option>DD</option>
											<option>01</option>
											<option>02</option>
											<option>03</option>
											<option>04</option>
											<option>05</option>
											<option>06</option>
											<option>07</option>
											<option>08</option>
											<option>09</option>
											<option>10</option>
											<option>11</option>
											<option>12</option>
											<option>13</option>
											<option>14</option>
											<option>15</option>
											<option>16</option>
											<option>17</option>
											<option>18</option>
											<option>19</option>
											<option>20</option>
											<option>21</option>
											<option>22</option>
											<option>23</option>
											<option>24</option>
											<option>25</option>
											<option>26</option>
											<option>27</option>
											<option>28</option>
											<option>29</option>
											<option>30</option>
											<option>31</option>
										</select>
									</div>
									<span class="status c_grn01">* 실명 인증 처리 완료되었습니다.</span>
									<span class="status c_red" style="display: none;">* 실명 인증 처리 실패했습니다.</span>
								</div>
								<div class="cardExam">
									<p class="m_15 minibx">주민등록증 예시</p>
									<div class="dp_sb cardImgshow">
										<div class="imgwrap">
											<img src="../images/korid_card.png" alt="">
										</div>
										<div class="txtBox dp_sb dp_fc">
											<p>
												<span class="c_red">
													발급일자 오기입시, 개통이 불가합니다. <br>반드시 정확한 정보로 입력해주시기 바랍니다.
												</span>
											</p>
											<div class="cardInfosmll">
												<p class="m-20 needInfo c_gry">※ 부정가입방지를 위해 신분증 진위여부 확인 과정이 필요합니다.</p>
												<p class="needInfo c_gry">※ 정확한 정보를 입력해주세요.</p>
											</div>
										</div>
									</div>

								</div>
							</div>
							<!--주민등록증 선택시 보여져야 함-->

							<!--운전면허증 선택시 보여져야 함-->
							<div class="kindCont">
								<div class="inputWrap">
									<label class="minibx" for="issueNum">운전면허번호</label>
									<input id="issueNum" type="text">
								</div>
								<div class="inputWrap">
									<label class="minibx" for="issueNum">발급일자</label>
									<div class="dateWrap dp_sb">
										<select>
											<option>YYYY</option>
											<option>2000</option>
										</select>
										<select>
											<option>MM</option>
											<option>01</option>
											<option>02</option>
											<option>03</option>
											<option>04</option>
											<option>05</option>
											<option>06</option>
											<option>07</option>
											<option>08</option>
											<option>09</option>
											<option>10</option>
											<option>11</option>
											<option>12</option>
										</select>
										<select>
											<option>DD</option>
											<option>01</option>
											<option>02</option>
											<option>03</option>
											<option>04</option>
											<option>05</option>
											<option>06</option>
											<option>07</option>
											<option>08</option>
											<option>09</option>
											<option>10</option>
											<option>11</option>
											<option>12</option>
											<option>13</option>
											<option>14</option>
											<option>15</option>
											<option>16</option>
											<option>17</option>
											<option>18</option>
											<option>19</option>
											<option>20</option>
											<option>21</option>
											<option>22</option>
											<option>23</option>
											<option>24</option>
											<option>25</option>
											<option>26</option>
											<option>27</option>
											<option>28</option>
											<option>29</option>
											<option>30</option>
											<option>31</option>
										</select>
									</div>
									<span class="status c_red">* 실명 인증 처리 완료되었습니다.</span>
									<span class="status c_red" style="display: none;">* 실명 인증 처리 실패했습니다.</span>
								</div>
								<div class="cardExam">
									<p class="m_15 minibx">운전면허증 예시</p>
									<div class="dp_sb cardImgshow">
										<div class="imgwrap">
											<img src="../images/dr_card.png" alt="">
										</div>
										<div class="txtBox dp_sb dp_fc">
											<p>
												<span class="c_red">
													발급일자 오기입시, 개통이 불가합니다. <br>반드시 정확한 정보로 입력해주시기 바랍니다.
												</span>
											</p>
											<div class="cardInfosmll">
												<p class="m-20 needInfo c_gry">※ 부정가입방지를 위해 신분증 진위여부 확인 과정이 필요합니다.</p>
												<p class="needInfo c_gry">※ 정확한 정보를 입력해주세요.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!--운전면허증 선택시 보여져야 함-->
						</div>
					</div>
				</div>
			</div>
			<!--내국인 선택시 보여져야 함-->

			
			<!--외국인 선택시 보여져야 함-->
			<div class="nationKind">
				<div class="wht01 p-20 p_20">
					<div class="c_center">
						<div class="inputWrap">
							<label class="minibx m_lineChg" for="name">이름 <span>(여권 또는 외국인 등록증에 기재된 영문 이름 전체 입력)</span></label>
							<input id="name" type="text" placeholder="이름(NAME)">
						</div>
						<div class="inputWrap">
							<label class="minibx" for="regiNum">외국인 등록증 번호</label>
							<input id="regiNum" type="text">
						</div>
					</div>
				</div>
				<div class="wht01 m-28 p_20 p-20">
					<div class="c_center">
						<div class="kindBtnWrap">
							<ul class="kindBox mb40 dp_sb dp_c">
								<li>
									<span>신분증</span>
								</li>
								<li>
									<label class="dp_sb dp_c dp_cc active" for="c_box4_1"><input type="radio" name="c_box4" id="c_box4_1" onclick="c_box4(this.name,0);">외국인 등록증</label>
								</li>
								<li>
									<label class="dp_sb dp_c dp_cc" for="c_box4_2"><input type="radio" name="c_box4" id="c_box4_2" onclick="c_box4(this.name,1);">여권</label>
								</li>
							</ul>
						</div>

						<div class="cardExamWrap">
							<!--외국인 등록증 선택시 보여져야함-->
							<div class="cardExam">
								<div class="inputWrap">
									<label class="minibx" for="issueNum">발급일자</label>
									<div class="dateWrap">
										<select>
											<option>YYYY</option>
											<option>2000</option>
										</select>
										<select>
											<option>MM</option>
											<option>01</option>
											<option>02</option>
											<option>03</option>
											<option>04</option>
											<option>05</option>
											<option>06</option>
											<option>07</option>
											<option>08</option>
											<option>09</option>
											<option>10</option>
											<option>11</option>
											<option>12</option>
										</select>
										<select>
											<option>DD</option>
											<option>01</option>
											<option>02</option>
											<option>03</option>
											<option>04</option>
											<option>05</option>
											<option>06</option>
											<option>07</option>
											<option>08</option>
											<option>09</option>
											<option>10</option>
											<option>11</option>
											<option>12</option>
											<option>13</option>
											<option>14</option>
											<option>15</option>
											<option>16</option>
											<option>17</option>
											<option>18</option>
											<option>19</option>
											<option>20</option>
											<option>21</option>
											<option>22</option>
											<option>23</option>
											<option>24</option>
											<option>25</option>
											<option>26</option>
											<option>27</option>
											<option>28</option>
											<option>29</option>
											<option>30</option>
											<option>31</option>
										</select>
									</div>
									<span class="status c_red">* 실명 인증 처리 완료되었습니다.</span>
									<span class="status c_red" style="display: none;">* 실명 인증 처리 실패했습니다.</span>
								</div>
								<p class="m_15 minibx">외국인 등록증 예시</p>
								<div class="dp_sb cardImgshow">
									<div class="imgwrap">
										<img src="../images/arc_card.png" alt="">
									</div>
									<div class="txtBox dp_sb dp_fc">
										<p>
											<span class="c_red">
												발급일자 오기입시, 개통이 불가합니다. <br>반드시 정확한 정보로 입력해주시기 바랍니다.
											</span><br>
											외국인 가입은 국내체류 기간 30일 이상 되어야 가입 가능합니다.<br>
											(D-2/E-9 체류코드의 경우, 180일 이상 체류 필요)<br> 
											* 주한미국인은 가입 불가능합니다.
										</p>
										<div class="cardInfosmll">
											<p class="m-20 needInfo c_gry">※ 부정가입방지를 위해 신분증 진위여부 확인 과정이 필요합니다.</p>
											<p class="needInfo c_gry">※ 정확한 정보를 입력해주세요.</p>
										</div>
									</div>
								</div>
							</div>
							<!--외국인 등록증 선택시 보여져야함-->

							<!--여권 선택시 보여져야함-->
							<div class="cardExam">
								<div class="inputWrap">
									<label class="minibx" for="issueNum">발급일자</label>
									<div class="dateWrap">
										<select>
											<option>YYYY</option>
											<option>2000</option>
										</select>
										<select>
											<option>MM</option>
											<option>01</option>
											<option>02</option>
											<option>03</option>
											<option>04</option>
											<option>05</option>
											<option>06</option>
											<option>07</option>
											<option>08</option>
											<option>09</option>
											<option>10</option>
											<option>11</option>
											<option>12</option>
										</select>
										<select>
											<option>DD</option>
											<option>01</option>
											<option>02</option>
											<option>03</option>
											<option>04</option>
											<option>05</option>
											<option>06</option>
											<option>07</option>
											<option>08</option>
											<option>09</option>
											<option>10</option>
											<option>11</option>
											<option>12</option>
											<option>13</option>
											<option>14</option>
											<option>15</option>
											<option>16</option>
											<option>17</option>
											<option>18</option>
											<option>19</option>
											<option>20</option>
											<option>21</option>
											<option>22</option>
											<option>23</option>
											<option>24</option>
											<option>25</option>
											<option>26</option>
											<option>27</option>
											<option>28</option>
											<option>29</option>
											<option>30</option>
											<option>31</option>
										</select>
									</div>
									<span class="status c_red">* 실명 인증 처리 완료되었습니다.</span>
									<span class="status c_red" style="display: none;">* 실명 인증 처리 실패했습니다.</span>
								</div>
								<div class="inputWrap m_20">
									<label class="minibx" for="addr">여권번호</label>
									<input id="addr" type="text" placeholder="주소 검색" autocomplete="off">
								</div>
								<div class="inputWrap">
									<label class="minibx" for="issueNum">체류기간</label>
									<div class="dateWrap dp_sb">
										<select>
											<option>YYYY</option>
											<option>2000</option>
										</select>
										<select>
											<option>MM</option>
											<option>01</option>
											<option>02</option>
											<option>03</option>
											<option>04</option>
											<option>05</option>
											<option>06</option>
											<option>07</option>
											<option>08</option>
											<option>09</option>
											<option>10</option>
											<option>11</option>
											<option>12</option>
										</select>
										<select>
											<option>DD</option>
											<option>01</option>
											<option>02</option>
											<option>03</option>
											<option>04</option>
											<option>05</option>
											<option>06</option>
											<option>07</option>
											<option>08</option>
											<option>09</option>
											<option>10</option>
											<option>11</option>
											<option>12</option>
											<option>13</option>
											<option>14</option>
											<option>15</option>
											<option>16</option>
											<option>17</option>
											<option>18</option>
											<option>19</option>
											<option>20</option>
											<option>21</option>
											<option>22</option>
											<option>23</option>
											<option>24</option>
											<option>25</option>
											<option>26</option>
											<option>27</option>
											<option>28</option>
											<option>29</option>
											<option>30</option>
											<option>31</option>
										</select>
									</div>
									<span class="status c_red">* 실명 인증 처리 완료되었습니다.</span>
									<span class="status c_red" style="display: none;">* 실명 인증 처리 실패했습니다.</span>
								</div>
							</div>
							<!--여권 선택시 보여져야함-->
						</div>
					</div>
				</div>
			</div>
			<!--외국인 선택시 보여져야 함-->
		</div>

		<!------- 공통 -------->
		<div class="wht01 p-20 p_20">
			<div class="c_center">
				<div class="inputWrap m_20">
					<label class="minibx" for="addr">주소</label>
					<input id="addr" type="text" placeholder="주소 검색">
				</div>
			</div>
		</div>
		<div class="wht01 m-28 m_28 p-50 p_20">
			<div class="c_center">
				<div class="inputWrap">
					<label class="minibx" for="cellphone">휴대폰 번호</label>
					<input id="cellphone" type="text" placeholder="휴대폰 번호">
				</div>
				<div class="inputWrap">
					<p class="m_15 minibx">가입 유형</p>
					<a class="selectBtn dp_sb dp_c" href="" title="">
						<span class="nmmoveType">번호이동(이 번호 그대로 가입합니다.)</span>
						<span class="lnr lnr-chevron-down"></span>
					</a>
					<div class="selectContWrap">
						<div class="selectKind">
							<div class="selectTop">
								<a class="close" href="" title="닫기"><span class="lnr lnr-cross"></span></a>
								<p class="txt-c bold2">가입유형</p>
							</div>
							<div class="selectBot">
								<a class="joinBtn" href="./certificateChk.php" title="">
									<p class="bold">번호 이동(이 번호 그대로 가입합니다)</p>
									<span class="c_gry03">기존에 사용하던 휴대폰 번호 그대로 사용하고 싶은 경우 선택해 주세요</span>
								</a>
								<a class="joinBtn" href="" title="">
									<p class="bold">신규 가입(새로운 번호로 가입합니다)</p>
									<span class="c_gry03">새로운 번호로 신규로 휴대폰을 개통하는 경우 선택해 주세요</span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="wht01 m-28 m_28 p_20 p-50">
			<div class="c_center">
				<div class="inputWrap">
					<p class="minibx">본인인증방식</p>
					<div class="kindBtnWrap">
						<ul class="kindBox dp_sb dp_c">
							<li>
								<label class="dp_sb dp_c dp_cc txt-c" for="c_box3_1"><input type="radio" name="c_box3" id="c_box3_1" onclick="c_box3(this.name,0);">간편인증</label>
							</li>
							<li>
								<label class="dp_sb dp_c dp_cc txt-c" for="c_box3_2"><input type="radio" name="c_box3" id="c_box3_2" onclick="c_box3(this.name,1);">신용카드인증</label>
							</li>
							<li>
								<label class="dp_sb dp_c dp_cc txt-c" for="c_box3_3"><input type="radio" name="c_box3" id="c_box3_3" onclick="c_box3(this.name,2);">범용공인인증</label>
							</li>
						</ul>
						<p class="c_red">※ 법인카드, 가족카드, 선불카드는 본인확인이 불가능합니다.</p>
						<p>※ 고객님의 개인정보는 암호화로 안전하게 처리되며, 본인인증시 별도의 비용은 발생하지 않습니다.</p>
						<a class="submitBtn gradient c_w" href="./certiChkFinish.php" title="본인인증 하기">본인인증 하기</a>
					</div>
				</div>
			</div>
		</div>
		<!------- 공통 -------->
	</div>

	<script>
		//가입 유형 번호 이동 눌렀을 때
		$(".selectBtn").click(function(event){
			event.preventDefault();

			$(this).siblings(".selectContWrap").stop().fadeIn();
		});

		$(".selectContWrap .close").click(function(event){
			event.preventDefault();
			
			$(".selectContWrap").stop().fadeOut();
		});

		//가입 유형에서 신규 가입을 눌렀을 때

		$(".selectBot .joinBtn:nth-child(2)").click(function(event){
			event.preventDefault();

			$(".inputWrap .selectBtn .nmmoveType").text("신규 가입(새로운 번호로 가입합니다)");
		});

	</script>

	<script>
		function c_box1(obj,chk){
			eChk = document.getElementsByName(obj);

			for(var i=0;i<eChk.length;i++){
				var j=i+1
				if(i == chk){
					eChk[i].checked = true;
					$('#c_box1_'+j).parent().addClass('active');
				}else{
					eChk[i].checked = false;
					$('#c_box1_'+j).parent().removeClass('active');
				}
			}
			if(chk+1==1){	//tab기능
				$(".nationKindWrap .nationKind").hide();
				$(".nationKindWrap .nationKind:nth-child(1)").show(); //내국인 선택했을때
			}else if(chk+1==2){
				$(".nationKindWrap .nationKind").hide();
				$(".nationKindWrap .nationKind:nth-child(2)").show(); //외국인 선택했을때
			}

		}

		function c_box2(obj,chk){
			eChk = document.getElementsByName(obj);

			for(var i=0;i<eChk.length;i++){
				var jj=i+1
				if(i == chk){
					eChk[i].checked = true;
					$('#c_box2_'+jj).parent().addClass('active');
				}else{
					eChk[i].checked = false;
					$('#c_box2_'+jj).parent().removeClass('active');
				}
			}

			if(chk+1==1){	//tab기능
				$(".kindContWrap .kindCont").hide();
				$(".kindContWrap .kindCont:nth-child(1)").show(); //신분증 첫번째 버튼 눌렀을때
			}else if(chk+1==2){
				$(".kindContWrap .kindCont").hide();
				$(".kindContWrap .kindCont:nth-child(2)").show(); //신분증 두번째 버튼 눌렀을때
			}

		}
	
		function c_box3(obj,chk){
			eChk = document.getElementsByName(obj);

			for(var i=0;i<eChk.length;i++){
				var jjj=i+1
				if(i == chk){
					eChk[i].checked = true;
					$('#c_box3_'+jjj).parent().addClass('active');
				}else{
					eChk[i].checked = false;
					$('#c_box3_'+jjj).parent().removeClass('active');
				}
			}
		}

		function c_box4(obj,chk){
			eChk = document.getElementsByName(obj);

			for(var i=0;i<eChk.length;i++){
				var jjjj=i+1
				if(i == chk){
					eChk[i].checked = true;
					$('#c_box4_'+jjjj).parent().addClass('active');
				}else{
					eChk[i].checked = false;
					$('#c_box4_'+jjjj).parent().removeClass('active');
				}
			}

			if(chk+1==1){	//tab기능
				$(".cardExamWrap .cardExam").hide();
				$(".cardExamWrap .cardExam:nth-child(1)").show(); //신분증 첫번째 버튼 눌렀을때
			}else if(chk+1==2){
				$(".cardExamWrap .cardExam").hide();
				$(".cardExamWrap .cardExam:nth-child(2)").show(); //신분증 두번째 버튼 눌렀을때
			} 
		}

		function c_box5(obj,chk){
			eChk = document.getElementsByName(obj);

			for(var i=0;i<eChk.length;i++){
				var jjjjj=i+1
				if(i == chk){
					eChk[i].checked = true;
					$('#c_box5_'+jjjjj).parent().addClass('active');
				}else{
					eChk[i].checked = false;
					$('#c_box5_'+jjjjj).parent().removeClass('active');
				}
			}
		}
	</script>
<?
	include '../footer.php';
?>