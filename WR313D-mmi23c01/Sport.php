<?php
abstract class Sport {
    protected string $intitule; 
    protected bool $individuel; 
    private static int $nbSport = 0; 

   
    public function __construct(string $intitule, bool $individuel) {
        $this->intitule = $intitule;
        $this->individuel = $individuel;
        self::$nbSport++;
    }

    public static function getNbSport(): int {
        return self::$nbSport; 
    }
}
?>
