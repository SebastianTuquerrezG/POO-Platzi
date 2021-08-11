import java.util.ArrayList;
import java.util.Map;

class UberBlack extends Uber_cars {
    Map<String, Map<String, Integer>> typeCarAccepted;
    ArrayList<String> material;

    public UberBlack(String license, Cuenta driver, Map<String, Map<String,Integer>> typeCarAccepted, ArrayList<String> material){
        super(license, driver);
        this.typeCarAccepted = typeCarAccepted;
        this.material = material;
    }
}
