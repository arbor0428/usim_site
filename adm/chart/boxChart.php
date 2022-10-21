<?
if($sType == 'C'){
	$boxTitle = '음성 ('.number_format($cnt01).'건)';
	$score = $bar01;
	$ct = 'primary';

}elseif($sType == 'A'){
	$boxTitle = '양성 ('.number_format($cnt02).'건)';
	$score = $bar02;
	$ct = 'danger';

}elseif($sType == 'E'){
	$boxTitle = '오류 ('.number_format($cnt03).'건)';
	$score = $bar03;
	$ct = 'secondary';
}

if($sType){
?>
<div class="col-lg-4">
	<div class="card border-left-<?=$ct?> shadow h-100 py-2">
		<div class="card-body">
			<div class="row no-gutters align-items-center">
				<div class="col mr-2">
					<div class="text-xs font-weight-bold text-<?=$ct?> text-uppercase mb-1"><?=$boxTitle?></div>
					<div class="row no-gutters align-items-center">
						<div class="col-auto">
							<div class="h5 mb-0 mr-3 font-weight-bold text-<?=$ct?>"><?=$score?>%</div>
						</div>
						<div class="col">
							<div class="progress progress-sm mr-2">
								<div class="progress-bar bg-<?=$ct?>" role="progressbar" style="width: <?=$score?>%" aria-valuenow="<?=$score?>" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-auto">
					<i class="fa-2x text-gray-300"><?=$sType?></i>
				</div>
			</div>
		</div>
	</div>
</div>
<?
}
?>