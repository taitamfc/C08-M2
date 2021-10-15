<?php
	function _buildQuery( $usePaginate = false ){
		$sql = 'SELECT * FROM notes';

		//SORT
		$sortBy 	= ( isset( $_GET['sortBy'] ) ) ? $_GET['sortBy'] : 'id';
		$sortDir 	= ( isset( $_GET['sortDir'] ) ) ? $_GET['sortDir'] : 'desc';
		$limit 		= ( isset( $_GET['limit'] ) ) ? $_GET['limit'] : 5;
		$offset 	= ( isset( $_GET['offset'] ) ) ? $_GET['offset'] : 0;

		$conditions = [];

		//SEARCH
		$typeID 	= ( isset( $_GET['typeID'] ) ) ? $_GET['typeID'] 	: '';
		if( $typeID ){
			$conditions[] = ' typeID = '.$typeID;
		}

		$txtSearch 	= ( isset( $_GET['txtSearch'] ) ) ? $_GET['txtSearch'] 	: '';
		if( $txtSearch ){
			$conditions[] = ' title LIKE %'.$txtSearch.'%';
		}

		$txtName 	= ( isset( $_GET['txtName'] ) ) ? $_GET['txtName'] 	: '';
		if( $txtSearch ){
			$conditions[] = ' name LIKE %'.$txtName.'%';
		}

		if( count( $conditions ) ){
			if( count( $conditions ) == 1 ){
				$sql .= ' WHERE '.$conditions[0];
			}else{
				$sql .= ' WHERE '.$conditions[0];
				unset( $conditions[0] );

				foreach( $conditions as $condition ){
					$sql .= ' AND '.$condition;
				}
			}
		}
		$sql .= 'ORDER BY '.$sortBy.' '.$sortDir;

		if( $usePaginate ){
			$sql .= 'LIMIT '.$limit.' OFFSET '.$offset.'';
		}
		return $sql;
	}

	//lấy tất cả để phân trang
	$total = _buildQuery(false);

	//thuật toán phân trang
	$items = _buildQuery(true);

	

