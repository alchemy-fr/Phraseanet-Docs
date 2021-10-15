/**
 * Phraseanet responsive iFrame.
 *
 * Handle Phraseanet iframe message and resize width or
 * height iframe dimension according to "optimizeArea" iframe
 * data attribute value ("width" or "height").
 */
window.addEventListener("message", (event) => {

	let data = event.data;

	if (typeof data.id !=='undefined')
	{
		if (data.id === 'Phraseanet')
		{
			let frameList = document.querySelectorAll('iframe');

			frameList.forEach((domObjFrame) => {

				let iFrameUrl = domObjFrame.src;
				let dataOptmizeArea = domObjFrame.dataset.optimizeArea;

				if ((typeof dataOptmizeArea !=='undefined') && (typeof iFrameUrl !=='undefined') )
				{
					if (iFrameUrl === data.url)
					{
						if(dataOptmizeArea === 'width')
						{
							domObjFrame.style.width = data.optimizedWidth + 'px';
						}
						if(dataOptmizeArea === 'height')
						{
							domObjFrame.style.height = data.optimizedHeight + 'px';
						}
					}
				}
			});
		}
	}
}, false);