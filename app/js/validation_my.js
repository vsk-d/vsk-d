$(document).ready(function(){

	if ($('.popup').length) {
		Popups.init()
	}

	$('#form').on('submit', function(e){
		e.preventDefault();

		var
			$this = $(this);

		if (validateThis($this)) {

			postFormData($this, function(data){
				var
					reqPopup = data.status ? '#success' : '#error';

				Popups.open(reqPopup);
			});
		}
	});

}); // - > ready_end;




$.fn.tooltip = function  (options) {

	// создаем опции
		options ={
			position	: options.position || 'rigth',
			content		: options.content || 'Wrong content'

		};

	// Дедаем разметку
		var	
			markup =	 '<div class="tooltip tooltip_' + options.position + '"> \
						 <div class="tooltip__inner">' + options.content + '</div> \
					     </div>';
	// Кешируем this
		var
			$this = this,
			body = $('body');

		$this
		.addClass('tooltipstered')
		.attr('data-tooltip-position', options.position);

		body.append(markup);

		_positionIt($this, )

		function _positionIt(elem, tooltip, position) {
			// Измеряем элемент
		var
			elemWidth   = elem.outerWidth(true),
			elemHeight  = elem.outerHeight(true),
			topEdge     = elem.offset().top,
			bottomEdge  = topEdge + elemHeight,
			leftEdge    = elem.offset().left,
			rightEdge   = leftEdge + elemWidth;

			// Измеряекм тултип
		var
			tooltipWidth    = tooltip.outerWidth(true),
			tooltipHeight   = tooltip.outerHeight(true),
			leftCentered    = (elemWidth / 2) - (tooltipWidth / 2),
			topCentered     = (elemHeight / 2) - (tooltipHeight / 2);

				// Определяем позицию тултипа

				var positions = {};

				switch (position) {
					case 'right' :
						positions = {
							left : rightEdge,
							top : topEdge + topCentered
						};
						break;
					case 'top' :
						positions = {
							left: leftEdge + leftCentered,
							top : topEdge - tooltipHeight
						};
						break;
					case 'bottom' :
						positions = {
							left : leftEdge + leftCentered,
							top : bottomEdge
						};
						break;
					case 'left' :
						positions = {
							left : leftEdge - tooltipWidth,
							top : topEdge + topCentered
						};
						break;
		}
		tooltip
			.offset(positions)
			.css('opacity', '1');
	}
};