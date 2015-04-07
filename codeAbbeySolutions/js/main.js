
/********** PROBLEM 1: SUM A + B **********/
var ab_button = document.getElementById('sum_ab');

ab_button.addEventListener('click', function(a, b){
	var a = parseInt(document.getElementById('a').value),
		b = parseInt(document.getElementById('b').value),
		answer = document.getElementById('sum_ab_answer'),
		sum = a+b;
	answer.innerHTML = sum;
	//console.log("A is " + a);
	//console.log("B is " + b);
	//console.log(sum);
});/******************************/

/********** PROBLEM 2: SUM IN LOOP **********/
var sum_in_loop_button = document.getElementById('sum_in_loop_button');

sum_in_loop_button.addEventListener('click', function(){
	var user_input = document.getElementById('sum_in_loop_input').value,
		answer = document.getElementById('sum_in_loop_answer'),
		input_string_array = user_input.split(' '), //separate the user_input string to an array of individual strings
		input_array = input_string_array.map(function(x) { 
			return parseInt(x, 10); 
			}), //end input_array.map
		input_array_length = input_array.length,
		sum = 0; //initialize a count variable to use in the loop below
		//console.log("input length: " + input_array_length);
		//console.log("input: " + input_array);

	for (var i = 0; i<input_array_length; i++) { 
    sum += input_array[i];  //same as writing count = count+input_array[i]
	}; //end for loop

	answer.innerHTML = sum; 

});/**********************************/

/********** PROBLEM 3: SUMS IN LOOP **********/
var sums_in_loop_button = document.getElementById('sums_in_loop_button');

sums_in_loop_button.addEventListener('click', function(){
	var user_input = document.getElementById('sums_in_loop_input').value,
		answer = document.getElementById('sums_in_loop_answer'),
		input_string_array = user_input.split(' '), //separate the user_input string to an array of individual strings
		input_array = input_string_array.map(function(x) { 
			return parseInt(x, 10); 
			}), //end input_array.map
		input_array_length = input_array.length,
		half_input_array = input_array_length/2;
		//console.log("input length: " + input_array_length);
		//console.log("half input length: " + half_input_array);
		//console.log("input: " + input_array);

	for (var counter = 0, array2 = []; counter<half_input_array; counter++) {
      var removed = input_array.splice(0, 2); //2.1 remove first two elements from the array
      var x = removed[0]+removed[1]; //2.2 sum the removed elements
      array2.push(x); //2.3 add the sum of removed elements to array2
      while (x.length>0) { //if there are elements in the temporary array
          x.pop(); //empty the temporary array
      }; //end while loop
  }; //end for loop
  answer.innerHTML = array2.join(' ');
});/**********************************/

