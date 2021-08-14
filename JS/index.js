var uber_cars = new Uber_cars("1002", new Cuenta("Sebastian Tuquerrez", "778010"));
uber_cars.passenger = 1;
uber_cars.printDataCar();

var uberX = new UberX("10002", new Cuenta("Sebastian", "778010"), "Mitsubishi", "2010")
uberX.passenger = 4;
uberX.printDataCar();

var uberPool = new UberPool("778010", new Cuenta("Tuquerrez", "1002"), "McClaren", "2020")
uberPool.passenger = 4;
uberPool.printDataCar();

