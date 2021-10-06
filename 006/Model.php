<?php

	abstract class Model {
		//phương thức dùng để lưu trữ
		abstract public function store();

		//phương thức dùng để cập nhật
		abstract public function update();

		//phương thức dùng để hủy dữ liệu
		abstract public function destroy();

		//phương thức dùng để lấy tất cả
		abstract public function getAll();

		//phương thức dùng tìm một kết quả dựa vào id
		abstract public function find( $id );
	}