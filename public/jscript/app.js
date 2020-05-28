//Variables
var manufacturerSelect = document.getElementById("manufacturerInput");
var makeSelect = document.getElementById("makeInput");
var select = document.getElementById("yearInput"),
  yearArr = [10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];

var carMakers = [
  "Audi",
  "BMW",
  "Chevy",
  "Chrysler",
  "Fiat",
  "Ford",
  "Honda",
  "Hyundai",
  "Jaguar",
  "Mercedes",
  "Nissan",
  "Smart",
  "Tesla",
  "Toyota",
  "Volkswagen",
  "Other"
];

var carModels = {
  audiCars: ["E-Tron"],
  bmwCars: ["i3", "330e", "i3 REX", "i8 Coupe", "X5 xDrive 40e"],
  chevyCars: ["Bolt", "Volt"],
  chryslerCars: ["Pacifica Hybrid"],
  fiatCars: ["500e"],
  fordCars: ["Focus Electric", "Mustang Mach-E"],
  hondaCars: ["Clarity Electric", "Clarity Plug-In Hybrid"],
  hyundaiCars: [
    "Ionic Electric",
    "Ionic Plug-In Hybrid",
    "Kona",
    "Sonata Plug-In Hybrid"
  ],
  jaguarCars: ["I-Pace"],
  mercedesCars: ["C350e", "EQC", "GLE550e", "S560e"],
  nissanCars: ["Leaf"],
  smartCars: ["Fortwo ED"],
  teslaCars: [
    "Model 3",
    "Model S",
    "Model X",
    "Model Y",
    "Roadster",
    "CyberTruck"
  ],
  toyotaCars: ["Prius Prime"],
  volkswagenCars: ["e-Golf"],
  otherCars: ["Other"]
};

//functions

// populates the year dropdown with years between 2010 and 2020
for (let i = 0; i < yearArr.length; i++) {
  let option = document.createElement("option"),
    txt = document.createTextNode(yearArr[i]);

  option.appendChild(txt);
  select.insertBefore(option, select.lastChild);
}

// populates the car make dropdown
for (let i = 0; i < carMakers.length; i++) {
  //create option tags and text for each tags
  let elOption = document.createElement("option");
  let optionText = document.createTextNode(carMakers[i]);

  //set strings for the "value" attrbute
  var carStr = carMakers[i];
  var lowerCaseStr = carStr.toLowerCase();
  var valueString = lowerCaseStr + "Cars";

  //append variables to elements
  elOption.appendChild(optionText);
  elOption.value = valueString;
  manufacturerSelect.insertBefore(elOption, manufacturerSelect.lastChild);
}

//define the model dropdown elements
manufacturerSelect.onchange = function() {
  //clear out options in the model select dropdown otherwise it will continue to append the models
  makeSelect.length = 0;

  var selectedValue = this.options[this.selectedIndex].value;
  console.log(selectedValue);

  //select car manufacturer based on the selected value
  var manufacturerValue = carModels[selectedValue];

  console.log(manufacturerValue);

  for (let i = 0; i < manufacturerValue.length; i++) {
    console.log(manufacturerValue[i]);
    var elMakeOption = document.createElement("option");
    var elMakeOptionText = document.createTextNode(manufacturerValue[i]);

    elMakeOption.appendChild(elMakeOptionText);
    elMakeOption.value = manufacturerValue[i];
    console.log(elMakeOption);
    makeSelect.insertBefore(elMakeOption, makeSelect.lastChild);
  }
};
