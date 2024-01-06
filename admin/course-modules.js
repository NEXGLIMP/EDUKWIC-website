
function addModule() {
    var moduleContainer = document.getElementById('moduleContainer');
    var module = document.createElement('div');
    module.className = 'module';
    module.innerHTML = `
    <div class="form-group row mt-3">
    <label class="col-sm-2 col-form-label">MODULE</label>
    <div class="col-sm-7">
        <input class="form-control" name="module_name[]" type="text" >
    </div>
    </div>
    <div class="form-group row" >
	<label class="col-sm-2 col-form-label">MODULE DURATION</label>
	<div class="col-sm-7">
        <input class="form-control" name="module_duration[]" type="text" >
	</div>
	</div>
    <div class="form-group row mt-3">
    <label class="col-sm-2 col-form-label">SECTION</label>
    <div class="col-sm-7 mt-2">
        <input class="form-control" name="module_descriptions[${moduleContainer.childElementCount}][]" type="text" >
    </div>
    <input type="button" class="btn" onclick="addDescription(${moduleContainer.childElementCount})" value="ADD SECTION">
    </div>
    `;
    moduleContainer.appendChild(module);
}

function addDescription(moduleIndex) {
    var moduleContainer = document.getElementById('moduleContainer');
    var descriptionsContainer = moduleContainer.getElementsByClassName('module')[moduleIndex];
    var description = document.createElement('div');
    description.innerHTML = `
    <input class="form-control" name="module_descriptions[${moduleIndex}][]" type="text" ></input>
        `;
    descriptionsContainer.appendChild(description);
}

