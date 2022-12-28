<?php require_once "inc/header.php"; ?>

<ul class="menu">
	<li><a href="#text">input[type=text]</a></li>
	<li><a href="#password">input[type=password]</a></li>
	<li><a href="#tel">input[type=tel]</a></li>
	<li><a href="#email">input[type=email]</a></li>
	<li><a href="#checkbox">input[type=checkbox]</a></li>
	<li><a href="#radio">input[type=radio]</a></li>
	<li><a href="#number">input[type=number]</a></li>
	<li><a href="#range">input[type=range]</a></li>
	<li><a href="#color">input[type=color]</a></li>
	<li><a href="#url">input[type=url]</a></li>
	<li><a href="#file">input[type=file]</a></li>
	<li><a href="#date">input[type=date]</a></li>
	<li><a href="#time">input[type=time]</a></li>
	<li><a href="#select">select</a></li>
	<li><a href="#textarea">textarea</a></li>
	<li><a href="#submit">input[type=submit]</a></li>
	<li><a href="#reset">input[type=reset]</a></li>
	<li><a href="#button">button</a></li>
</ul>

<div class="inner">
	<h2 id="text">input[type=text]</h2>
	<div>
		<label>input[type=text].form-item</label>
		<input type="text" name="text" class="form-item" />
	</div>
	<div>
		<label>input[type=text].form-item.form-item--red</label>
		<input type="text" name="text" class="form-item form-item--red"/>
	</div>
	<div>
		<label>input[type=text].form-item.form-item--green</label>
		<input type="text" name="text" class="form-item form-item--green"/>
	</div>
	<div>
		<label>input[type=text].form-item.form-item--blue</label>
		<input type="text" name="text" class="form-item form-item--blue" />
	</div>


	<h2 id="password">input[type=password]</h2>
	<div>
		<label>input[type=password].form-item</label>
		<input type="password" name="password" class="form-item" />
	</div>
	<div>
		<label>input[type=password].form-item.form-item--red</label>
		<input type="password" name="password" class="form-item form-item--red"/>
	</div>
	<div>
		<label>input[type=password].form-item.form-item--green</label>
		<input type="password" name="password" class="form-item form-item--green"/>
	</div>
	<div>
		<label>input[type=password].form-item.form-item--blue</label>
		<input type="password" name="password" class="form-item form-item--blue" />
	</div>


	<h2 id="tel">input[type=tel]</h2>
	<div>
		<label>input[type=tel].form-item</label>
		<input type="tel" name="tel" class="form-item" />
	</div>
	<div>
		<label>input[type=tel].form-item.form-item--red</label>
		<input type="tel" name="tel" class="form-item form-item--red"/>
	</div>
	<div>
		<label>input[type=tel].form-item.form-item--green</label>
		<input type="tel" name="tel" class="form-item form-item--green"/>
	</div>
	<div>
		<label>input[type=tel].form-item.form-item--blue</label>
		<input type="tel" name="tel" class="form-item form-item--blue" />
	</div>


	<h2 id="email">input[type=email]</h2>
	<div>
		<label>input[type=email].form-item</label>
		<input type="email" name="email" class="form-item" />
	</div>
	<div>
		<label>input[type=email].form-item.form-item--red</label>
		<input type="email" name="email" class="form-item form-item--red"/>
	</div>
	<div>
		<label>input[type=email].form-item.form-item--green</label>
		<input type="email" name="email" class="form-item form-item--green"/>
	</div>
	<div>
		<label>input[type=email].form-item.form-item--blue</label>
		<input type="email" name="email" class="form-item form-item--blue" />
	</div>


	<h2 id="checkbox">input[type=checkbox]</h2>
	<div>
		<label>input[type=checkbox].form-item</label><br>
		<input type="checkbox" id="check01" name="check" class="form-item" checked/><label for="check01">checkbox01</label>
		<input type="checkbox" id="check02" name="check" class="form-item"/><label for="check02">checkbox02</label>
	</div>
	<div>
		<label>input[type=checkbox].form-item.form-item--red</label><br>
		<input type="checkbox" id="check01" name="check" class="form-item form-item--red" checked/><label for="check01">checkbox01</label>
		<input type="checkbox" id="check02" name="check" class="form-item form-item--red"/><label for="check02">checkbox02</label>
	</div>
	<div>
		<label>input[type=checkbox].form-item.form-item--green</label><br>
		<input type="checkbox" id="check01" name="check" class="form-item form-item--green" checked/><label for="check01">checkbox01</label>
		<input type="checkbox" id="check02" name="check" class="form-item form-item--green" /><label for="check02">checkbox02</label>
	</div>
	<div>
		<label>input[type=checkbox].form-item.form-item--blue</label><br>
		<input type="checkbox" id="check01" name="check" class="form-item form-item--blue" checked/><label for="check01">checkbox01</label>
		<input type="checkbox" id="check02" name="check" class="form-item form-item--blue"/><label for="check02">checkbox02</label>
	</div>


	<h2 id="radio">input[type=radio]</h2>
	<div>
		<label>input[type=radio].form-item</label><br>
		<input type="radio" id="radio01" name="radio" class="form-item" checked/><label for="radio01">radio button01</label>
		<input type="radio" id="radio02" name="radio" class="form-item"/><label for="radio02">radio button02</label>
	</div>
	<div>
		<label>input[type=radio].form-item.form-item--red</label><br>
		<input type="radio" id="radio01" name="radio" class="form-item form-item--red" checked/><label for="radio01">radio button01</label>
		<input type="radio" id="radio02" name="radio" class="form-item form-item--red"/><label for="radio02">radio button02</label>
	</div>
	<div>
		<label>input[type=radio].form-item.form-item--green</label><br>
		<input type="radio" id="radio01" name="radio" class="form-item form-item--green" checked/><label for="radio01">radio button01</label>
		<input type="radio" id="radio02" name="radio" class="form-item form-item--green"/><label for="radio02">radio button02</label>
	</div>
	<div>
		<label>input[type=radio].form-item.form-item--blue</label><br>
		<input type="radio" id="radio01" name="radio" class="form-item form-item--blue" checked/><label for="radio01">radio button01</label>
		<input type="radio" id="radio02" name="radio" class="form-item form-item--blue"/><label for="radio02">radio button02</label>
	</div>


	<h2 id="number">input[type=number]</h2>
	<div>
		<label>input[type=number].form-item</label>
		<input type="number" name="number" class="form-item" />
	</div>
	<div>
		<label>input[type=number].form-item.form-item--red</label>
		<input type="number" name="number" class="form-item form-item--red"/>
	</div>
	<div>
		<label>input[type=number].form-item.form-item--green</label>
		<input type="number" name="number" class="form-item form-item--green" />
	</div>
	<div>
		<label>input[type=number].form-item.form-item--blue</label>
		<input type="number" name="number" class="form-item form-item--blue" />
	</div>


	<h2 id="range">input[type=range]</h2>
	<div>
		<label>input[type=range].form-item</label><br>
		<input type="range" name="range" class="form-item" />
	</div>
	<div>
		<label>input[type=range].form-item.form-item--red</label><br>
		<input type="range" name="range" class="form-item form-item--red"/>
	</div>
	<div>
		<label>input[type=range].form-item.form-item--green</label><br>
		<input type="range" name="range" class="form-item form-item--green" />
	</div>
	<div>
		<label>input[type=range].form-item.form-item--blue</label><br>
		<input type="range" name="range" class="form-item form-item--blue" />
	</div>


	<h2 id="color">input[type=color]</h2>
	<div>
		<label>input[type=color].form-item</label><br>
		<input type="color" name="color" class="form-item" />
	</div>
	<div>
		<label>input[type=color].form-item.form-item--red</label><br>
		<input type="color" name="color" class="form-item form-item--red"/>
	</div>
	<div>
		<label>input[type=color].form-item.form-item--green</label><br>
		<input type="color" name="color" class="form-item form-item--green" />
	</div>
	<div>
		<label>input[type=color].form-item.form-item--blue</label><br>
		<input type="color" name="color" class="form-item form-item--blue" />
	</div>


	<h2 id="url">input[type=url]</h2>
	<div>
		<label>input[type=url].form-item</label>
		<input type="url" name="url" class="form-item" />
	</div>
	<div>
		<label>input[type=url].form-item.form-item--red</label>
		<input type="url" name="url" class="form-item form-item--red"/>
	</div>
	<div>
		<label>input[type=url].form-item.form-item--green</label>
		<input type="url" name="url" class="form-item form-item--green" />
	</div>
	<div>
		<label>input[type=url].form-item.form-item--blue</label>
		<input type="url" name="url" class="form-item form-item--blue" />
	</div>


	<h2 id="file">input[type=file]</h2>
	<div>
		<label>input[type=file].form-item</label><br>
		<input type="file" name="file" class="form-item" />
	</div>
	<div>
		<label>input[type=file].form-item.form-item--red</label><br>
		<input type="file" name="file" class="form-item form-item--red"/>
	</div>
	<div>
		<label>input[type=file].form-item.form-item--green</label><br>
		<input type="file" name="file" class="form-item form-item--green" />
	</div>
	<div>
		<label>input[type=file].form-item.form-item--blue</label><br>
		<input type="file" name="file" class="form-item form-item--blue" />
	</div>


	<h2 id="date">input[type=date]</h2>
	<div>
		<label>input[type=date].form-item</label>
		<input type="date" name="date" class="form-item" />
	</div>
	<div>
		<label>input[type=date].form-item.form-item--red</label>
		<input type="date" name="date" class="form-item form-item--red"/>
	</div>
	<div>
		<label>input[type=date].form-item.form-item--green</label>
		<input type="date" name="date" class="form-item form-item--green" />
	</div>
	<div>
		<label>input[type=date].form-item.form-item--blue</label>
		<input type="date" name="date" class="form-item form-item--blue" />
	</div>


	<h2 id="time">input[type=time]</h2>
	<div>
		<label>input[type=time].form-item</label>
		<input type="time" name="time" class="form-item" />
	</div>
	<div>
		<label>input[type=time].form-item.form-item--red</label>
		<input type="time" name="time" class="form-item form-item--red"/>
	</div>
	<div>
		<label>input[type=time].form-item.form-item--green</label>
		<input type="time" name="time" class="form-item form-item--green" />
	</div>
	<div>
		<label>input[type=time].form-item.form-item--blue</label>
		<input type="time" name="time" class="form-item form-item--blue" />
	</div>


	<h2 id="select">select</h2>
	<div>
		<label>select.form-item</label>
		<select name="select" class="form-item">
			<option value="1">option1</option>
			<option value="2">option2</option>
			<option value="3">option3</option>
			<option value="4">option4</option>
			<option value="5">option5</option>
		</select>
	</div>
	<div>
		<label>select.form-item.form-item--red</label>
		<select name="select" class="form-item form-item--red">
			<option value="1">option1</option>
			<option value="2">option2</option>
			<option value="3">option3</option>
			<option value="4">option4</option>
			<option value="5">option5</option>
		</select>
	</div>
	<div>
		<label>select.form-item.form-item--green</label>
		<select name="select" class="form-item form-item--green">
			<option value="1">option1</option>
			<option value="2">option2</option>
			<option value="3">option3</option>
			<option value="4">option4</option>
			<option value="5">option5</option>
		</select>
	</div>
	<div>
		<label>select.form-item.form-item--blue</label>
		<select name="select" class="form-item form-item--blue">
			<option value="1">option1</option>
			<option value="2">option2</option>
			<option value="3">option3</option>
			<option value="4">option4</option>
			<option value="5">option5</option>
		</select>
	</div>


	<h2 id="textarea">textarea</h2>
	<div>
		<label>textarea.form-item</label>
		<textarea name="textarea" rows="5" class="form-item"></textarea>
	</div>
	<div>
		<label>textarea.form-item.form-item--red</label>
		<textarea name="textarea" rows="5" class="form-item form-item--red"></textarea>
	</div>
	<div>
		<label>textarea.form-item.form-item--green</label>
		<textarea name="textarea" rows="5" class="form-item form-item--green"></textarea>
	</div>
	<div>
		<label>textarea.form-item.form-item--blue</label>
		<textarea name="textarea" rows="5" class="form-item form-item--blue"></textarea>
	</div>


	<h2 id="submit">input[type=submit]</h2>
	<div>
		<label>input[type=submit].form-item</label>
		<input type="submit" name="submit" class="form-item" value="submit button"/>
	</div>
	<div>
		<label>input[type=submit].form-item.form-item--red</label>
		<input type="submit" name="submit" class="form-item form-item--red" value="submit button"/>
	</div>
	<div>
		<label>input[type=submit].form-item.form-item--green</label>
		<input type="submit" name="submit" class="form-item form-item--green" value="submit button"/>
	</div>
	<div>
		<label>input[type=submit].form-item.form-item--blue</label>
		<input type="submit" name="submit" class="form-item form-item--blue" value="submit button"/>
	</div>


	<h2 id="reset">input[type=reset]</h2>
	<div>
		<label>input[type=reset].form-item</label>
		<input type="reset" name="reset" class="form-item" value="reset button"/>
	</div>
	<div>
		<label>input[type=reset].form-item.form-item--red</label>
		<input type="reset" name="reset" class="form-item form-item--red" value="reset button"/>
	</div>
	<div>
		<label>input[type=reset].form-item.form-item--green</label>
		<input type="reset" name="reset" class="form-item form-item--green" value="reset button"/>
	</div>
	<div>
		<label>input[type=reset].form-item.form-item--blue</label>
		<input type="reset" name="reset" class="form-item form-item--blue" value="reset button"/>
	</div>


	<h2 id="button">button</h2>
	<div>
		<label>button.form-item</label>
		<button name="button" class="form-item">button</button>
	</div>
	<div>
		<label>button.form-item.form-item--red</label>
		<button name="button" class="form-item form-item--red">button</button>
	</div>
	<div>
		<label>button.form-item.form-item--green</label>
		<button name="button" class="form-item form-item--green">button</button>
	</div>
	<div>
		<label>button.form-item.form-item--blue</label>
		<button name="button" class="form-item form-item--blue">button</button>
	</div>
</div>

<?php require_once "inc/footer.php"; ?><?php require_once "inc/header.php"; ?>

<ul class="menu">
	<li><a href="#text">input[type=text]</a></li>
	<li><a href="#password">input[type=password]</a></li>
	<li><a href="#tel">input[type=tel]</a></li>
	<li><a href="#email">input[type=email]</a></li>
	<li><a href="#checkbox">input[type=checkbox]</a></li>
	<li><a href="#radio">input[type=radio]</a></li>
	<li><a href="#number">input[type=number]</a></li>
	<li><a href="#range">input[type=range]</a></li>
	<li><a href="#color">input[type=color]</a></li>
	<li><a href="#url">input[type=url]</a></li>
	<li><a href="#file">input[type=file]</a></li>
	<li><a href="#date">input[type=date]</a></li>
	<li><a href="#time">input[type=time]</a></li>
	<li><a href="#select">select</a></li>
	<li><a href="#textarea">textarea</a></li>
	<li><a href="#submit">input[type=submit]</a></li>
	<li><a href="#reset">input[type=reset]</a></li>
	<li><a href="#button">button</a></li>
</ul>

<div class="inner">
	<h2 id="text">input[type=text]</h2>
	<div>
		<label>input[type=text].form-item</label>
		<input type="text" name="text" class="form-item" />
	</div>
	<div>
		<label>input[type=text].form-item.form-item--red</label>
		<input type="text" name="text" class="form-item form-item--red"/>
	</div>
	<div>
		<label>input[type=text].form-item.form-item--green</label>
		<input type="text" name="text" class="form-item form-item--green"/>
	</div>
	<div>
		<label>input[type=text].form-item.form-item--blue</label>
		<input type="text" name="text" class="form-item form-item--blue" />
	</div>


	<h2 id="password">input[type=password]</h2>
	<div>
		<label>input[type=password].form-item</label>
		<input type="password" name="password" class="form-item" />
	</div>
	<div>
		<label>input[type=password].form-item.form-item--red</label>
		<input type="password" name="password" class="form-item form-item--red"/>
	</div>
	<div>
		<label>input[type=password].form-item.form-item--green</label>
		<input type="password" name="password" class="form-item form-item--green"/>
	</div>
	<div>
		<label>input[type=password].form-item.form-item--blue</label>
		<input type="password" name="password" class="form-item form-item--blue" />
	</div>


	<h2 id="tel">input[type=tel]</h2>
	<div>
		<label>input[type=tel].form-item</label>
		<input type="tel" name="tel" class="form-item" />
	</div>
	<div>
		<label>input[type=tel].form-item.form-item--red</label>
		<input type="tel" name="tel" class="form-item form-item--red"/>
	</div>
	<div>
		<label>input[type=tel].form-item.form-item--green</label>
		<input type="tel" name="tel" class="form-item form-item--green"/>
	</div>
	<div>
		<label>input[type=tel].form-item.form-item--blue</label>
		<input type="tel" name="tel" class="form-item form-item--blue" />
	</div>


	<h2 id="email">input[type=email]</h2>
	<div>
		<label>input[type=email].form-item</label>
		<input type="email" name="email" class="form-item" />
	</div>
	<div>
		<label>input[type=email].form-item.form-item--red</label>
		<input type="email" name="email" class="form-item form-item--red"/>
	</div>
	<div>
		<label>input[type=email].form-item.form-item--green</label>
		<input type="email" name="email" class="form-item form-item--green"/>
	</div>
	<div>
		<label>input[type=email].form-item.form-item--blue</label>
		<input type="email" name="email" class="form-item form-item--blue" />
	</div>


	<h2 id="checkbox">input[type=checkbox]</h2>
	<div>
		<label>input[type=checkbox].form-item</label><br>
		<input type="checkbox" id="check01" name="check" class="form-item" checked/><label for="check01">checkbox01</label>
		<input type="checkbox" id="check02" name="check" class="form-item"/><label for="check02">checkbox02</label>
	</div>
	<div>
		<label>input[type=checkbox].form-item.form-item--red</label><br>
		<input type="checkbox" id="check01" name="check" class="form-item form-item--red" checked/><label for="check01">checkbox01</label>
		<input type="checkbox" id="check02" name="check" class="form-item form-item--red"/><label for="check02">checkbox02</label>
	</div>
	<div>
		<label>input[type=checkbox].form-item.form-item--green</label><br>
		<input type="checkbox" id="check01" name="check" class="form-item form-item--green" checked/><label for="check01">checkbox01</label>
		<input type="checkbox" id="check02" name="check" class="form-item form-item--green" /><label for="check02">checkbox02</label>
	</div>
	<div>
		<label>input[type=checkbox].form-item.form-item--blue</label><br>
		<input type="checkbox" id="check01" name="check" class="form-item form-item--blue" checked/><label for="check01">checkbox01</label>
		<input type="checkbox" id="check02" name="check" class="form-item form-item--blue"/><label for="check02">checkbox02</label>
	</div>


	<h2 id="radio">input[type=radio]</h2>
	<div>
		<label>input[type=radio].form-item</label><br>
		<input type="radio" id="radio01" name="radio" class="form-item" checked/><label for="radio01">radio button01</label>
		<input type="radio" id="radio02" name="radio" class="form-item"/><label for="radio02">radio button02</label>
	</div>
	<div>
		<label>input[type=radio].form-item.form-item--red</label><br>
		<input type="radio" id="radio01" name="radio" class="form-item form-item--red" checked/><label for="radio01">radio button01</label>
		<input type="radio" id="radio02" name="radio" class="form-item form-item--red"/><label for="radio02">radio button02</label>
	</div>
	<div>
		<label>input[type=radio].form-item.form-item--green</label><br>
		<input type="radio" id="radio01" name="radio" class="form-item form-item--green" checked/><label for="radio01">radio button01</label>
		<input type="radio" id="radio02" name="radio" class="form-item form-item--green"/><label for="radio02">radio button02</label>
	</div>
	<div>
		<label>input[type=radio].form-item.form-item--blue</label><br>
		<input type="radio" id="radio01" name="radio" class="form-item form-item--blue" checked/><label for="radio01">radio button01</label>
		<input type="radio" id="radio02" name="radio" class="form-item form-item--blue"/><label for="radio02">radio button02</label>
	</div>


	<h2 id="number">input[type=number]</h2>
	<div>
		<label>input[type=number].form-item</label>
		<input type="number" name="number" class="form-item" />
	</div>
	<div>
		<label>input[type=number].form-item.form-item--red</label>
		<input type="number" name="number" class="form-item form-item--red"/>
	</div>
	<div>
		<label>input[type=number].form-item.form-item--green</label>
		<input type="number" name="number" class="form-item form-item--green" />
	</div>
	<div>
		<label>input[type=number].form-item.form-item--blue</label>
		<input type="number" name="number" class="form-item form-item--blue" />
	</div>


	<h2 id="range">input[type=range]</h2>
	<div>
		<label>input[type=range].form-item</label><br>
		<input type="range" name="range" class="form-item" />
	</div>
	<div>
		<label>input[type=range].form-item.form-item--red</label><br>
		<input type="range" name="range" class="form-item form-item--red"/>
	</div>
	<div>
		<label>input[type=range].form-item.form-item--green</label><br>
		<input type="range" name="range" class="form-item form-item--green" />
	</div>
	<div>
		<label>input[type=range].form-item.form-item--blue</label><br>
		<input type="range" name="range" class="form-item form-item--blue" />
	</div>


	<h2 id="color">input[type=color]</h2>
	<div>
		<label>input[type=color].form-item</label><br>
		<input type="color" name="color" class="form-item" />
	</div>
	<div>
		<label>input[type=color].form-item.form-item--red</label><br>
		<input type="color" name="color" class="form-item form-item--red"/>
	</div>
	<div>
		<label>input[type=color].form-item.form-item--green</label><br>
		<input type="color" name="color" class="form-item form-item--green" />
	</div>
	<div>
		<label>input[type=color].form-item.form-item--blue</label><br>
		<input type="color" name="color" class="form-item form-item--blue" />
	</div>


	<h2 id="url">input[type=url]</h2>
	<div>
		<label>input[type=url].form-item</label>
		<input type="url" name="url" class="form-item" />
	</div>
	<div>
		<label>input[type=url].form-item.form-item--red</label>
		<input type="url" name="url" class="form-item form-item--red"/>
	</div>
	<div>
		<label>input[type=url].form-item.form-item--green</label>
		<input type="url" name="url" class="form-item form-item--green" />
	</div>
	<div>
		<label>input[type=url].form-item.form-item--blue</label>
		<input type="url" name="url" class="form-item form-item--blue" />
	</div>


	<h2 id="file">input[type=file]</h2>
	<div>
		<label>input[type=file].form-item</label><br>
		<input type="file" name="file" class="form-item" />
	</div>
	<div>
		<label>input[type=file].form-item.form-item--red</label><br>
		<input type="file" name="file" class="form-item form-item--red"/>
	</div>
	<div>
		<label>input[type=file].form-item.form-item--green</label><br>
		<input type="file" name="file" class="form-item form-item--green" />
	</div>
	<div>
		<label>input[type=file].form-item.form-item--blue</label><br>
		<input type="file" name="file" class="form-item form-item--blue" />
	</div>


	<h2 id="date">input[type=date]</h2>
	<div>
		<label>input[type=date].form-item</label>
		<input type="date" name="date" class="form-item" />
	</div>
	<div>
		<label>input[type=date].form-item.form-item--red</label>
		<input type="date" name="date" class="form-item form-item--red"/>
	</div>
	<div>
		<label>input[type=date].form-item.form-item--green</label>
		<input type="date" name="date" class="form-item form-item--green" />
	</div>
	<div>
		<label>input[type=date].form-item.form-item--blue</label>
		<input type="date" name="date" class="form-item form-item--blue" />
	</div>


	<h2 id="time">input[type=time]</h2>
	<div>
		<label>input[type=time].form-item</label>
		<input type="time" name="time" class="form-item" />
	</div>
	<div>
		<label>input[type=time].form-item.form-item--red</label>
		<input type="time" name="time" class="form-item form-item--red"/>
	</div>
	<div>
		<label>input[type=time].form-item.form-item--green</label>
		<input type="time" name="time" class="form-item form-item--green" />
	</div>
	<div>
		<label>input[type=time].form-item.form-item--blue</label>
		<input type="time" name="time" class="form-item form-item--blue" />
	</div>


	<h2 id="select">select</h2>
	<div>
		<label>select.form-item</label>
		<select name="select" class="form-item">
			<option value="1">option1</option>
			<option value="2">option2</option>
			<option value="3">option3</option>
			<option value="4">option4</option>
			<option value="5">option5</option>
		</select>
	</div>
	<div>
		<label>select.form-item.form-item--red</label>
		<select name="select" class="form-item form-item--red">
			<option value="1">option1</option>
			<option value="2">option2</option>
			<option value="3">option3</option>
			<option value="4">option4</option>
			<option value="5">option5</option>
		</select>
	</div>
	<div>
		<label>select.form-item.form-item--green</label>
		<select name="select" class="form-item form-item--green">
			<option value="1">option1</option>
			<option value="2">option2</option>
			<option value="3">option3</option>
			<option value="4">option4</option>
			<option value="5">option5</option>
		</select>
	</div>
	<div>
		<label>select.form-item.form-item--blue</label>
		<select name="select" class="form-item form-item--blue">
			<option value="1">option1</option>
			<option value="2">option2</option>
			<option value="3">option3</option>
			<option value="4">option4</option>
			<option value="5">option5</option>
		</select>
	</div>


	<h2 id="textarea">textarea</h2>
	<div>
		<label>textarea.form-item</label>
		<textarea name="textarea" rows="5" class="form-item"></textarea>
	</div>
	<div>
		<label>textarea.form-item.form-item--red</label>
		<textarea name="textarea" rows="5" class="form-item form-item--red"></textarea>
	</div>
	<div>
		<label>textarea.form-item.form-item--green</label>
		<textarea name="textarea" rows="5" class="form-item form-item--green"></textarea>
	</div>
	<div>
		<label>textarea.form-item.form-item--blue</label>
		<textarea name="textarea" rows="5" class="form-item form-item--blue"></textarea>
	</div>


	<h2 id="submit">input[type=submit]</h2>
	<div>
		<label>input[type=submit].form-item</label>
		<input type="submit" name="submit" class="form-item" value="submit button"/>
	</div>
	<div>
		<label>input[type=submit].form-item.form-item--red</label>
		<input type="submit" name="submit" class="form-item form-item--red" value="submit button"/>
	</div>
	<div>
		<label>input[type=submit].form-item.form-item--green</label>
		<input type="submit" name="submit" class="form-item form-item--green" value="submit button"/>
	</div>
	<div>
		<label>input[type=submit].form-item.form-item--blue</label>
		<input type="submit" name="submit" class="form-item form-item--blue" value="submit button"/>
	</div>


	<h2 id="reset">input[type=reset]</h2>
	<div>
		<label>input[type=reset].form-item</label>
		<input type="reset" name="reset" class="form-item" value="reset button"/>
	</div>
	<div>
		<label>input[type=reset].form-item.form-item--red</label>
		<input type="reset" name="reset" class="form-item form-item--red" value="reset button"/>
	</div>
	<div>
		<label>input[type=reset].form-item.form-item--green</label>
		<input type="reset" name="reset" class="form-item form-item--green" value="reset button"/>
	</div>
	<div>
		<label>input[type=reset].form-item.form-item--blue</label>
		<input type="reset" name="reset" class="form-item form-item--blue" value="reset button"/>
	</div>


	<h2 id="button">button</h2>
	<div>
		<label>button.form-item</label>
		<button name="button" class="form-item">button</button>
	</div>
	<div>
		<label>button.form-item.form-item--red</label>
		<button name="button" class="form-item form-item--red">button</button>
	</div>
	<div>
		<label>button.form-item.form-item--green</label>
		<button name="button" class="form-item form-item--green">button</button>
	</div>
	<div>
		<label>button.form-item.form-item--blue</label>
		<button name="button" class="form-item form-item--blue">button</button>
	</div>
</div>

<?php require_once "inc/footer.php"; ?>