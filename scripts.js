// custom Javascript for the entire site

// activate any Google Ads if we've previously set searchRelatedVisitor
jQuery( document ).ready(function() {
  if (searchRelatedVisitor == true ) {
    jQuery(".advert").show();
    jQuery.getScript( "https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js" );
  }
});

// identify search-engine visitors (thanks to scratch99.com for the idea)
var searchRelatedVisitor = false; // defaults to false
var ref = document.referrer;
console.log("Referrer: "+ref);
var se = new Array('facebook','pinterist','google','yahoo','bing','ask', 'yandex',);
for (var i = 0; i <= se.length-1; i++) {
  if (ref.indexOf(se[i])!== -1) {
    searchRelatedVisitor = true;
    console.log("searchRelatedVisitor=true b/c MATCH: Referrer is from a search engine.");
  }
}
// and now identify those having a search query string
var qs = document.referrer.split('?')[1] || '';
console.log("qs: "+qs);
var sq = new Array('s=', 'q=', 'search=');
for (var i = 0; i <= se.length-1; i++) {
  if (qs.indexOf(sq[i])!== -1) {
    searchRelatedVisitor = true;
    console.log("searchRelatedVisitor=true b/c MATCH: Referrer is from a search query.");
  }
}
// and if we are on a search results page
var wlh = window.location.href.split('?')[1] || '';
console.log("wlh: "+wlh);
var sq = new Array('s=', 'q=', 'search=');
for (var i = 0; i <= se.length-1; i++) {
  if (wlh.indexOf(sq[i])!== -1) {
    searchRelatedVisitor = true;
    console.log("searchRelatedVisitor=true b/c MATCH: On a search page.");
  }
}
// end identify search-engine visitors
