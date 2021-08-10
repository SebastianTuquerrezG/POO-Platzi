//Todo cambio gracias a EcmaScript6

class Uber_cars{
    constructor(license, driver){
    this.id;
    this.license = license;
    this.driver = driver;
    this.passenger;
    this.placa;
    }

    printDataCar(){
    console.log(this.driver)
    console.log(this.driver.name)
    console.log(this.driver.document)
    }
}