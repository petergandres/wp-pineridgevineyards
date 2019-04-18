jQuery(function() {

  jQuery('.nav-level-1 a:first-child').hover(function(){
    console.log('hovering')
    var myDestination = jQuery(this).attr('data-megamenu');
    console.log('onMouseOver myDestination',myDestination);
    jQuery('.nav-level-2').not(jQuery(myDestination)).css('display','none');
    jQuery(myDestination).css('display','flex');
  },function(){
    //jQuery('.nav-level-2').hide('fast');
    var myDestination = jQuery(this).attr('data-megamenu');
    console.log('onMouseOut myDestination',myDestination);
    jQuery(myDestination).hover(function(){
      //console.log('nav-level-2 hover');
      jQuery(myDestination).css('display','flex');
       //jQuery(myDestination).addClass('display-flex');
    },function(){
      //console.log('nav-level-2 out');
      jQuery(myDestination).css('display','none');
    });
  });//*/


  if ($(window).width() > 601){
      jQuery('#main-navigation .mobile-hide').removeClass('hidden-div');
     
  }
  
setTimeout(function(){ 
  jQuery(".toggle-bar").click(function(evt){
    evt.stopPropagation();
    jQuery('#mobile-navbar').toggleClass('hidden-div');
    
  });
}, 1000);  

//Reservation policy accordion
  jQuery('.res-accordion').click(function(){
    jQuery('#res-policy').toggleClass('hidden-div');
  
  });
  jQuery('.legacy-accordion').click(function(){
    jQuery('#legacy-policy').toggleClass('hidden-div');
  });
  jQuery('.cave-accordion').click(function(){
    jQuery('#cave-policy').toggleClass('hidden-div');
  });
  jQuery('.group-accordion').click(function(){
    jQuery('#group-policy').toggleClass('hidden-div');
  });
  jQuery('.trade-accordion').click(function(){
    jQuery('#trade-policy').toggleClass('hidden-div');
  });

// memebership comparison accordion
  jQuery('.anchor-accordion').click(function(){
    jQuery('#member-comparison').toggleClass('hidden-div');
    jQuery('.plus').toggleClass('hidden-div');
    jQuery('.minus').toggleClass('hidden-div');
  });
  jQuery('.join').click(function(){
    jQuery('#member-comparison').toggleClass('hidden-div');
    jQuery('.plus').toggleClass('hidden-div');
    jQuery('.minus').toggleClass('hidden-div');
  });

var timesRun = 0;
var interval = setInterval(function(){
    timesRun += 1;
    if(timesRun === 3){
        clearInterval(interval);
    }
   jQuery('#join-mega').click(function(){
    jQuery('#member-comparison').toggleClass('hidden-div');
    jQuery('.plus').toggleClass('hidden-div');
    jQuery('.minus').toggleClass('hidden-div');
  });
}, 1000); 


//smooth scroll on membership
jQuery(".join").click(function(){
    jQuery('html, body').animate({
        scrollTop: jQuery("#compare").offset().top
    }, 1000);
});
// //cart 
// jQuery('.v65-widgetModalCart-status > a').attr('id', 'v65-toggleModalCart');


// Tribe-Event Detail Append to custom column

jQuery('#tribe-custom-link').append(jQuery('.tribe-events-cal-links'));
jQuery('#tribe-custom-column > .vc_column-inner > .wpb_wrapper').append(jQuery('.tribe-events-single-section.tribe-events-event-meta.primary.tribe-clearfix'));
jQuery('#tribe-cutom-img').append(jQuery('.tribe-events-event-image'));


});

// am/pm small caps

/* 1. split the text
   2. find and add class to am/pm
   3. join the text
*/


jQuery(document).ready(function($){  
// membership comparison url link

if(window.location.href.indexOf('#compare') > -1) {
    jQuery('#member-comparison').toggleClass('hidden-div');
    jQuery('.plus').toggleClass('hidden-div');
    jQuery('.minus').toggleClass('hidden-div');
}

//events page(list)
  
  jQuery('p em.change-to-smallCap').html(function(){  
    var text= jQuery(this).text().split(' ');
    var last = text.pop();
    return text.join(" ") + (text.length > 0 ? ' <span class="font-Cap-small">'+last+'</span>' : last);   
  });


//events/event page

//jQuery('span.font-Cap-small').attr('style', 'font-variant:small-caps;');

jQuery('div.tribe-events-abbr.tribe-events-start-time').html(function(){  
    var eventText= jQuery(this).text().split(' ');
    var eventFirst = eventText.shift();
    var eventSecond = eventText.shift();
    var eventLast = eventText.pop();
    return  eventFirst +  (eventText.length > 0 ? ' <span class="font-Cap-small">'+eventSecond+'</span>' : eventSecond) + eventText.join(" ") + (eventText.length > 0 ? ' <span class="font-Cap-small">'+eventLast+'</span>' : eventLast);   
  });
//events/event (realted events)
// //start time

jQuery('span.tribe-event-date-start').html(function(){  
    var relatedStartText= jQuery(this).text().split(' ');
    var relatedStartLast = relatedStartText.pop();
    return relatedStartText.join(" ") + (relatedStartText.length > 0 ? ' <span class="font-Cap-small">'+relatedStartLast+'</span>' : relatedStartLast);   
  });

 // //end time

jQuery('span.tribe-event-time').html(function(){  
    var relatedEndText= jQuery(this).text().split(' ');
    var relatedEndLast = relatedEndText.pop();
    return relatedEndText.join(" ") + (relatedEndText.length > 0 ? ' <span class="font-Cap-small">'+relatedEndLast+'</span>' : relatedEndLast);   
  });

  jQuery('.upb_row_bg.vcpb-vz-jquery').appendTo(jQuery('.vc_row.wpb_row.vc_row-fluid.hero-row.width-1366'));

  setInterval(function(){ 
  jQuery("div.v65-widgetModalCart-dropdown div.v65-widgetModalCart-itemMessageError").html('ERROR ADDING PRODUCT TO CART. YOU MUST BE A WINE CLUB MEMBER AND LOG IN TO PURCHASE THIS PRODUCT');
}, 100);


});
jQuery(document).ready(function(){
  var timesRun = 0;
  var interval = setInterval(function(){
    timesRun += 1;
    if(timesRun === 5){
        clearInterval(interval);
    }

        if (!jQuery(".v65-widgetLogin-logout").length){
          jQuery('.limited').removeClass('not-logged-in');
          jQuery('.html-btn').addClass('not-logged-in');
          jQuery('.html-btn').removeClass('logged-in')
        }
        if(!jQuery(".v65-widgetLogin-login").length){
          jQuery('.limited').addClass('not-logged-in');
          jQuery('.html-btn').removeClass('not-logged-in');
          jQuery('.html-btn').addClass('logged-in')
        }
  }, 500);
});
// (function($) {
//     $(document).ready(function() {
//       var el = document.createElement('script');
//       el.type = 'application/ld+json';
//   if(window.location.href.indexOf("recipes") > -1) {
//       console.log("your url contains recipes ", el);
//     };
//       // el.text = JSON.stringify({
//       //   "@context": "http://schema.org/",
//       //   "@type": "Product",
//       //   "name": $('.single-product>h1').text(),
//       //   "image": $('.col-md-4>.v65-product-photo>img').attr('src'),
//       //   "description": $('.single-product .v65-product-teaser>p').text(),
//       //   "brand": {
//       //     "@type": "Thing",
//       //     "name": "The Hess Collection"
//       //   },
//       //   "offers": {
//       //     "@type": "Offer",
//       //     "priceCurrency": "USD",
//       //     "price": myPrice
//       //   }
//       // });
//       document.querySelector('head').appendChild(el);
//     });
//   }) (jQuery);


