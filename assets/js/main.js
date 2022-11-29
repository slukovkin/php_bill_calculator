const search = document.querySelector('#search')
const btn = document.querySelector('#btn-search').onclick = function (e) {
	// e.preventDefault()
	let data = search.value
	localStorage.setItem('input-search', data)
}