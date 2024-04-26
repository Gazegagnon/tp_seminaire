<?php

class Photo {

    private int $id;
    private int $id_inter;
    private string $image;
    

    public function __construct(int $id, int $id_inter, string $image){
        $this->id = $id;
        $this->id_inter = $id_inter;
        $this->image = $image;
    }

    public function getId(): int {return $this->id;}

	public function getIdInter(): int {return $this->id_inter;}

	public function getImage(): string {return $this->image;}

	

    public function setId(int $id): void {$this->id = $id;}

	public function setIdInter(int $id_inter): void {$this->id_inter = $id_inter;}

	public function setImage(string $image): void {$this->image = $image;}

	
	
}