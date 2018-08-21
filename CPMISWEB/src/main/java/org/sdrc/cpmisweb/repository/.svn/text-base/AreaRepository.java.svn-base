package org.sdrc.cpmisweb.repository;

import java.util.List;

import org.sdrc.cpmisweb.domain.Area;

/*
 * @author - Pratyush(pratyush@sdrc.co.in) created on - 26-06-2007(13:26)
 */
public interface AreaRepository {

	public List<Area> findAll();
	
	public Area findByAreaId(int areaId);
	
	List<Area> findAllByParentAreaId(Integer stateId);

	public List<Area> findCountryAndStateByStateId(int stateId);

	public Area findByAreaCode(String areaCode);

	public Area findByAreaNameAndParentAreaId(String districtName, int parentAreaId);
	
	public Area findByAreaName(String areaName);

}
