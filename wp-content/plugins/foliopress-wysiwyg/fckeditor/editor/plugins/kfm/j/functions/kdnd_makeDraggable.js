window.kdnd_makeDraggable=function(source_class){
	if($type(source_class)=='array'){
		return source_class.each(kdnd_makeDraggable);
	}
	$j('.'+source_class).each(function(key,el){
		if(el.kdnd_applied)return;
		el.kdnd_applied=true;
		if(!el.dragevents)el.dragevents=[];
		if(!el.dragevents[source_class])el.dragevents[source_class]=kdnd_dragInit(el,source_class);
		$j.event.add(el,'mousedown',el.dragevents[source_class]);
	});
}
