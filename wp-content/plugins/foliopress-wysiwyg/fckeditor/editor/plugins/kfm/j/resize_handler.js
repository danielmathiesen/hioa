// see license.txt for licensing
function kfm_resizeHandler_addMaxHeight(name){
	if(kfm_resizeHandler_maxHeights.indexOf(name)==-1)kfm_resizeHandler_maxHeights.push(name);
}
llStubs.push('kfm_resizeHandler');
llStubs.push('kfm_resizeHandler_add');
llStubs.push('kfm_resizeHandler_addMaxWidth');
llStubs.push('kfm_resizeHandler_remove');
llStubs.push('kfm_resizeHandler_removeMaxHeight');
llStubs.push('kfm_resizeHandler_removeMaxWidth');
var kfm_resizeHandler_maxHeights=[];
var kfm_resizeHandler_maxWidths=[];
