class Main {
    public static void main(String[] args) {
        System.out.println("Vamo a ver Objetos en Java");
        UberX uberX = new UberX("1002778", new Cuenta(25, "Sebastian Tuquerrez", "778010", "Joan@gmail.com", "madre", 31245), "Chevrolet", "2012");
        uberX.setId(1);
        uberX.setPasageros(4);
        //uberX.pasageros = 4;
        uberX.setPlaca("QBV392");
        uberX.printDataCars();

        UberVan uberVan = new UberVan("1000", new Cuenta(25, "Sebastian Tuquerrez", "778010", "Joan@gmail.com", "madre", 31245));
        uberVan.setId(2);
        uberVan.setPasageros(6);
        uberVan.setPlaca("ERF063");
        uberVan.printDataCars();
    }
}