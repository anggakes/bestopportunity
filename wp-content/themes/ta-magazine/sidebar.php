<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package TA Magazine
 */

if ( ! is_active_sidebar( 'sidebar-right' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area col-md-4" role="complementary">
	<div id="search-2" class="sidebar-widget widget_search" style='border-top: 1px solid #bdbdbd;'>
		<div class="row">

			<div class="col-md-12">
				<h4>Live Quotes</h4>
			<table class="greytable" id="quotes"><thead><tr><td width="20">
				&nbsp;</td>
			<td align="left" width="55">
				Ticker</td>
			<td align="center">
				Bid</td>
			<td align="center">
				Ask</td>
			<td align="center">
				Size</td>
			<td align="center">
				Spread</td>
		</tr></thead><tbody><tr class="even"><td>
				<img alt="" src="/sites/all/themes/zen/fbs/images/arr_up.gif"></td>
			<td class="ticker">
				EURUSD</td>
			<td>1.125<sup>4</sup></td>
			<td>1.1254<sup>8</sup></td>
			<td>5.9</td>
			<td>0.8</td>
		</tr><tr class="odd"><td>
				<img alt="" src="/sites/all/themes/zen/fbs/images/arr_up.gif"></td>
			<td class="ticker">
				USDJPY</td>
			<td>123.39<sup>4</sup></td>
			<td>123.40<sup>2</sup></td>
			<td>3.3</td>
			<td>0.8</td>
		</tr><tr class="even"><td>
				<img alt="" src="/sites/all/themes/zen/fbs/images/arr_up.gif"></td>
			<td class="ticker">
				GBPUSD</td>
			<td>1.5559<sup>1</sup></td>
			<td>1.5560<sup>2</sup></td>
			<td>7.1</td>
			<td>1.1</td>
		</tr><tr class="odd"><td>
				<img alt="" src="/sites/all/themes/zen/fbs/images/arr_up.gif"></td>
			<td class="ticker">
				USDCHF</td>
			<td>0.9294<sup>1</sup></td>
			<td>0.9295<sup>5</sup></td>
			<td>9.6</td>
			<td>1.4</td>
		</tr><tr class="even"><td>
				<img alt="" src="/sites/all/themes/zen/fbs/images/arr_up.gif"></td>
			<td class="ticker">
				EURCHF</td>
			<td>1.0459<sup>5</sup></td>
			<td>1.0461<sup>2</sup></td>
			<td>9.6</td>
			<td>1.7</td>
		</tr><tr class="odd"><td>
				<img alt="" src="/sites/all/themes/zen/fbs/images/arr_down.gif"></td>
			<td class="ticker">
				AUDUSD</td>
			<td>0.7732<sup>9</sup></td>
			<td>0.7733<sup>9</sup></td>
			<td>10.7</td>
			<td>1.0</td>
		</tr></tbody></table>

			</div>
		</div>
	</div>
	<?php dynamic_sidebar( 'sidebar-right' ); ?>
</aside><!-- #secondary -->
