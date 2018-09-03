<?php 
	namespace App\Helper;
	/**
	 * 

	 */
	class Cart 
	{
		public $items =[];
		public $total_quantity=0;
		public $total_amount=0;
		public function __construct()
		{
			$this->items = session('cart') ? session('cart') : [];
			$this->total_quantity = $this->total_quantity();
			$this->total_amount = $this->total_amount();
			
		}

		public function add($model){
			if(isset($this->items[$model->id])){
				$this->items[$model->id]['quantity'] +=1;
			}
			else
			{
				$this->items[$model->id]=[

				'id' => $model->id,
				'name' => $model->name,
				'price' => $model->sale_price >0 ? $model->sale_price : $model->price,
				'quantity' =>'1',
				'image' =>$model->image,
			];
			}
			
			session(['cart'=>$this->items]);
			//dd($this->items);
		}

		public function delete($id)
		{
			if(isset($this->items[$id]))
			{
				unset($this->items[$id]);
			}

			session(['cart'=>$this->items]);

		}

		public function update($id,$quantity)
		{
			if(isset($this->items[$id])){
				$this->items[$id]['quantity'] =$quantity;
			}
			session(['cart'=>$this->items]);

		}

		public function clear()
		{
			session(['cart'=>[]]);
		}


		protected function total_quantity()
		{	
			$t=0;
			foreach ($this->items as $item)
			{
				$t = $t + $item['quantity'];
			}
			return $t;
		}

		protected function total_amount()
		{	
			$t=0;
			foreach ($this->items as $item)
			{
				$t = $t + ($item['quantity'] * $item['price']);
			}
			return $t;
		}
	}
 ?>