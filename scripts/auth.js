(function(){

  Date.prototype.adjust = function(part, amount){
	part = part.toLowerCase();

	var map = {
				years: 'FullYear', months: 'Month', weeks: 'Hours', days: 'Hours', hours: 'Hours',
				minutes: 'Minutes', seconds: 'Seconds', milliseconds: 'Milliseconds',
				utcyears: 'UTCFullYear', utcmonths: 'UTCMonth', weeks: 'UTCHours', utcdays: 'UTCHours',
				utchours: 'UTCHours', utcminutes: 'UTCMinutes', utcseconds: 'UTCSeconds', utcmilliseconds: 'UTCMilliseconds'
			},
		mapPart = map[part];

	if(part == 'weeks' || part == 'utcweeks')
		amount *= 168;
	if(part == 'days' || part == 'utcdays')
		amount *= 24;

	this['set'+ mapPart]( this['get'+ mapPart]() + amount );

	return this;
}
 
})();

function Authenticator(shift) {
  this.shift = shift;
  this.getToken = function(){
    var d = new Date();
    var newshift = Math.round((30-shift/d.getMinutes()));
    d.adjust('minutes', -newshift);
    return d.format('dmmhhyy');
  }


}