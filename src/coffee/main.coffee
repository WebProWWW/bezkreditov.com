
#=include lib/MyClass.coffee

# $pixelp = $ '#pixelp'

# $doc = $ document

# offset = { top: 0, left: 0 }

# isCommandDown = off

# isOptionDown = off

# $pixelp.css
# 	left: Number localStorage.getItem 'pixelp.offsetX'
# 	top: Number localStorage.getItem 'pixelp.offsetY'
# 	display: localStorage.getItem 'pixelp.display'

# moveImage = (e) ->
# 	$pixelp.css
# 		left: e.pageX - offset.left
# 		top: e.pageY - offset.top
# 	on

# $pixelp.on 'mousedown', (e) ->
# 	if isCommandDown
# 		$pixelp.hide()
# 		localStorage.setItem('pixelp.display', 'none')
# 	else
# 		offsetImg = $pixelp.offset()
# 		offset =
# 			left: e.pageX - offsetImg.left
# 			top: e.pageY - offsetImg.top
# 		$doc.on 'mousemove', moveImage
# 	on

# $doc.on 'mouseup', (e) ->
# 	$doc.off 'mousemove'
# 	offsetImg = $pixelp.offset()
# 	localStorage.setItem('pixelp.offsetX', offsetImg.left)
# 	localStorage.setItem('pixelp.offsetY', offsetImg.top)
# 	if isOptionDown
# 		$pixelp.show()
# 		localStorage.setItem('pixelp.display', 'block')
# 	on

# $doc.on 'keydown', (e) ->
# 	isCommandDown = e.which is 91
# 	isOptionDown = e.which is 18
# 	on

# $doc.on 'keyup', (e) ->
# 	isCommandDown = off
# 	isOptionDown = off
# 	on


# $pixelp.on 'mousewheel', (e) ->
# 	if isCommandDown
# 		e.preventDefault() 
# 		opacity = Number $pixelp.css 'opacity'
# 		opacity = opacity + e.originalEvent.deltaY / 3000
# 		$pixelp.css {opacity: opacity}
# 	on
