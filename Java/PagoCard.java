class PagoCard extends Pagos {
    Integer number;
    Integer ccv;
    String date;
    String name;

    public PagoCard(Integer id, Integer monto, Integer number, Integer ccv, String date, String name){
        super(id, monto);
        this.number = number;
        this.ccv = ccv;
        this.date = date;
        this.name = name;
    }
}