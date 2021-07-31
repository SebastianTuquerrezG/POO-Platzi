class Main {
    public static void main(String[] args) {
        System.out.println("Vamo a ver Objetos en Java");
        Uber_cars uber_cars = new Uber_cars();
        uber_cars.license = "1002778";
        uber_cars.driver = "Sebastian Tuquerrez";
        uber_cars.id = 1;
        uber_cars.pasageros = 4;
        uber_cars.placa = "QBV392";
        uber_cars.printDataCars();
    }
}