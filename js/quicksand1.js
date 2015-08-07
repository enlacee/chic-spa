jQuery(function() {
	jQuery.fn.sorted = function(customOptions) {
		var options = {
			reversed: false,
			by: function(a) {
				return a.text();
			}
		};
		jQuery.extend(options, customOptions);
	
		jQuerydata = jQuery(this);
		arr = jQuerydata.get();
		arr.sort(function(a, b) {
			
		   	var valA = options.by(jQuery(a));
		   	var valB = options.by(jQuery(b));
			if (options.reversed) {
				return (valA < valB) ? 1 : (valA > valB) ? -1 : 0;				
			} else {		
				return (valA < valB) ? -1 : (valA > valB) ? 1 : 0;	
			}
		});
		return jQuery(arr);
	};

})

jQuery(function() {
  
  var read_button = function(class_names) {
    var r = {
      selected: false,
      type: 0
    };
    for (var i=0; i < class_names.length; i++) {
      if (class_names[i].indexOf('selected-') == 0) {
        r.selected = true;
      }
      if (class_names[i].indexOf('segment-') == 0) {
        r.segment = class_names[i].split('-')[1];
      }
    };
    return r;
  };
  
  var determine_sort = function(jQuerybuttons) {
    var jQueryselected = jQuerybuttons.parent().filter('[class*="selected-"]');
    return jQueryselected.find('a').attr('data-value');
  };
  
  var determine_kind = function(jQuerybuttons) {
    var jQueryselected = jQuerybuttons.parent().filter('[class*="selected-"]');
    return jQueryselected.find('a').attr('data-value');
  };
  
  var jQuerypreferences = {
    duration: 500,
    easing: 'swing',
    adjustHeight: 'dynamic'
  };
  
  var jQuerylist = jQuery('#list');
  var jQuerydata = jQuerylist.clone();
  
  var jQuerycontrols = jQuery('ul.splitter ul');
  
  jQuerycontrols.each(function(i) {
    
    var jQuerycontrol = jQuery(this);
    var jQuerybuttons = jQuerycontrol.find('a');
    
    jQuerybuttons.bind('click', function(e) {
      
      var jQuerybutton = jQuery(this);
      var jQuerybutton_container = jQuerybutton.parent();
      var button_properties = read_button(jQuerybutton_container.attr('class').split(' '));      
      var selected = button_properties.selected;
      var button_segment = button_properties.segment;

      if (!selected) {

        jQuerybuttons.parent().removeClass('selected-0').removeClass('selected-1').removeClass('selected-2');
        jQuerybutton_container.addClass('selected-' + button_segment);
        
        var sorting_type = determine_sort(jQuerycontrols.eq(1).find('a'));
        var sorting_kind = determine_kind(jQuerycontrols.eq(0).find('a'));
        
        if (sorting_kind == 'all') {
          var jQueryfiltered_data = jQuerydata.find('li');
        } else {
          var jQueryfiltered_data = jQuerydata.find('li.' + sorting_kind);
        }
        
        if (sorting_type == 'size') {
          var jQuerysorted_data = jQueryfiltered_data.sorted({
            by: function(v) {
              return parseFloat(jQuery(v).find('span').text());
            }
          });
        } else {
          var jQuerysorted_data = jQueryfiltered_data.sorted({
            by: function(v) {
              return jQuery(v).find('strong').text().toLowerCase();
            }
          });
        }
        
        jQuerylist.quicksand(jQuerysorted_data, jQuerypreferences, function(){ jQuery("a[class^='prettyPhoto']").prettyPhoto(); });
        
      }
      
      e.preventDefault();
    });
    
  }); 

  var high_performance = true;  
  var jQueryperformance_container = jQuery('#performance-toggle');
  var jQueryoriginal_html = jQueryperformance_container.html();
  
  jQueryperformance_container.find('a').live('click', function(e) {
    if (high_performance) {
      jQuerypreferences.useScaling = false;
      jQueryperformance_container.html('CSS3 scaling turned off. Try the demo again. <a href="#toggle">Reverse</a>.');
      high_performance = false;
    } else {
      jQuerypreferences.useScaling = true;
      jQueryperformance_container.html(jQueryoriginal_html);
      high_performance = true;
    }
    e.preventDefault();
  });
});