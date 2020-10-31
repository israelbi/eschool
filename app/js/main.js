'use strict';
	function displayElement(el)
	{
		var els = document.getElementById(el);
		if(els != 'null' || els != 'undefined')
		{
			return els.style.display = "block";
		}
	}

	function HideElement(el)
	{
		var els = document.getElementById(el);
		return els.style.display = "none";	
	}

	function printEl(el)
	{
		var doc = document.getElementById(el).innerHTML;
		var restore = document.body.innerHTML;

		document.body.innerHTML = doc;
			window.print();
		document.body.innerHTML = restore;
	}

	//verify form_1
	// const form_payment_by_date = document.querySelector("#form_1");
	// const day = document.querySelector("#day")
	// const month = document.querySelector("#month")
	// const year = document.querySelector("#year")

	// let errors = []
	// const  erros_html = document.querySelector("#errors")

	// form_payment_by_date.addEventListener("submit",(e)=>{
	// 	e.preventDefault()

	// 	// if(day.value == "" || day.value == null ){
	// 	// 	errors.push("name is required !")
	// 	// }else{
	// 	// 	if(moth.value == "" || moth.value == null){
	// 	// 		errors.push("month is required !")
	// 	// 	}
	// 	// }

	// 	// errors_html.textContent = errors
	// 	alert()
	// })

	 //handle errors
     
	 
	 if(form){
		var form = document.getElementById("form");
		const handler = document.getElementById("error");
		const classN = document.getElementById('class');
		const forbidenClasses = [1,2];

		form.addEventListener("submit",(e)=>{
			e.preventDefault();
			if(classN.value == ""){
				handler.textContent = "undefined class";
				handler.className = "alert alert-danger";
			}

			for(let i in forbidenClasses){
				if(classN.value == forbidenClasses[i]){
						handler.textContent = "forbiden class";
						handler.className = "alert alert-danger";
						widow.refresh()
					
				}
			}
		});
	}

	function changePayment(e){
		const options = e.options[e.selectedIndex].value
		setTimeout(()=>{
			window.location.href = "?paymentType="+options.split(' ').join('_')
		},600)
	}

	const formSearchInput = document.getElementById("seachInput")
	const resultSearch = document.getElementById('resultSearch')

	const seResultData = document.getElementById("seResultData")

	if(formSearchInput){
		  formSearchInput.addEventListener("input",(e)=>{
			
			 e.preventDefault()
			 let search = parseInt(e.target.value.trim().toLowerCase());

			 search == "" ? resultSearch.style.display = "none" : resultSearch.style.display = "block"
			 	

				fetch(`http://localhost/eschool/app/scripts/students.php?matricule=${search}`)
				.then( data => data.json())
				.then( data => {
					
					if(data.information.length > 0){
						const li = `
							<li>
								<a class="fa fa-user icon"></a>
								<a href="?student=${data.information[0].matricule}">
									${data.information[0].fname} ${data.information[0].lname}
								</a>
							</li>
							`
						seResultData.innerHTML = li
					}
				});
		  });
		}