class Main {
    public static void main(String[] args) {
        System.out.println("Vamo a ver Objetos en Java");
        Uber_cars uber_cars = new Uber_cars("1002778", new Cuenta("Sebastian Tuquerrez", "778010"));
        uber_cars.id = 1;
        uber_cars.pasageros = 4;
        uber_cars.placa = "QBV392";
        uber_cars.printDataCars();
    }
}