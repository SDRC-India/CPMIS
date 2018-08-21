package org.sdrc.cpmisweb.springdatarepository;

import java.util.List;

import org.sdrc.cpmisweb.domain.Area;
import org.sdrc.cpmisweb.domain.Data;
import org.sdrc.cpmisweb.repository.DataEntryRepository;
import org.springframework.cache.annotation.CachePut;
import org.springframework.cache.annotation.Cacheable;
import org.springframework.data.jpa.repository.Modifying;
import org.springframework.data.jpa.repository.Query;
import org.springframework.data.repository.RepositoryDefinition;
import org.springframework.data.repository.query.Param;
import org.springframework.transaction.annotation.Transactional;

/**
 * @author Biswa Ranjan CPMISWEB 06-Jan-2018 6:07:42 pm
 *		   Pratyush, modified on 04-05-2018 16:00 pm
 */
@RepositoryDefinition(domainClass = Data.class, idClass = Integer.class)
public interface SpringDataDataEntryRepository extends DataEntryRepository {

	@Override
	@Query("SELECT utData , utArea , utTimePeriod , sourceObj from Data utData JOIN utData.area as utArea JOIN utData.timePeriod as utTimePeriod JOIN utData.source as sourceObj "
			+ "WHERE "
			+ "utArea.areaId = :areaNid AND "
			+ "utData.indicatorUnitSubgroup.indicatorUnitSubgroupId = :indicatorId "
			+ "ORDER BY utArea.areaCode,utTimePeriod.timePeriod")
	@Cacheable(value= {"utdata"})
	public List<Object[]> findData(@Param("indicatorId") Integer indicatorId,
			@Param("areaNid") Integer areaNid);

	/**
	 * Fetches UtAreaEns between two levels of area i.e childLevel as 2nd
	 * parameter and areaLevel for areaCode(parent) as 1st parameter. Both the
	 * levels are inclusive. So this method results child areas for given
	 * areaCode and their parent area.
	 */
	@Override
	@Query("SELECT ar FROM Area ar WHERE ar.level <= :childLevel AND ar.level >=   "
			+ "(SELECT parArea.level FROM Area parArea WHERE parArea.areaCode = :areaId)")
	public Area[] getAreaNid(@Param("areaId") String areaCode,
			@Param("childLevel") Integer childLevel);

	@Override
	@Query("SELECT utData , utData.area , utData.timePeriod FROM Data utData JOIN utData.area utArea JOIN utData.timePeriod utTimePeriod "
			+ " WHERE "
			+ " utData.timePeriod.timeperiodId = :timeperiodId AND "
			+ " utData.source.indicatorClassificationId = :sourceNid AND "
			+ " utData.indicatorUnitSubgroup.indicatorUnitSubgroupId = :indicatorUnitSubgroupId AND utArea.areaId "
			+ " IN " + "(:areaNid)  " + " ORDER BY utData.percentage")
	@Cacheable(value= {"utdata"})
	public List<Object[]> findDataByTimePeriod(
			@Param("indicatorUnitSubgroupId") Integer indicatorId,
			@Param("timeperiodId") Integer timeperiodId,
			@Param("sourceNid") Integer sourceNid,
			@Param("areaNid") Integer[] areaNid);

	@Query("select area.areaCode,area.areaName, ar.areaCode, ar.areaName from Area area , Area ar where ar.areaId = area.parentAreaId")
	public List<Object[]> findByAreaCode();

	@Override
	@Cacheable(value= {"utdata"})
	@Query(value = "SELECT AVG( utdata.percentage) as avg , utdata.district_id_fk as areaID, area.area_name as areaName, "
			+ "icius.ic_fk as icNid , ic.classification_name as icName "
			+ "FROM data as utdata, ic_ius_mapping as icius , indicator_classification as ic, area as area "
			+ "where icius.ius_fk = utdata.indicator_unit_subgroup_id_fk  and icius.ic_fk = ic.indicator_classification_id "
			+ " and area.area_id = utdata.district_id_fk and "
			+ "utdata.time_period_id_fk = :timePeriod and utdata.district_id_fk IN (:areaList) and ic.parent_id = :index and ic.indicatorclassificationtype = 'SC' "
			+ "group by utdata.district_id_fk, icius.ic_fk,ic.classification_name,area.area_name ORDER BY utdata.district_id_fk", nativeQuery = true)
	List<Object[]> findByArea(@Param("areaList") List<Integer> areaList,
			@Param("timePeriod") Integer timePeriod, @Param("index") int index);

	@Override
	@Cacheable(value= {"utdata"})
	@Query(value = "SELECT data.percentage as dataValue, ic.indicator_classification_id as icNId, ic.classification_name as icName, indi.indicator_id as indNId, "
			+ "indi.indicator_name as indName, data.district_id_fk as areaNId, area.area_name as areaName "
			+ "FROM data as data, "
			+ "ic_ius_mapping as icius, "
			+ "indicator_classification as ic, "
			+ "indicator as indi, "
			+ "area as area "
			+ "where icius.ic_fk=ic.indicator_classification_id and data.indicator_unit_subgroup_id_fk=icius.ius_fk and indi.indicator_id=data.indicator_id_fk"
			+ " and data.district_id_fk=area.area_id and "
			+ "data.time_period_id_fk =:timePeriod and "
			+ "data.district_id_fk IN (:areaList) and ic.parent_id=:parentSectorId ORDER BY data.district_id_fk,ic.classification_name", nativeQuery = true)
	List<Object[]> findInByArea(@Param("areaList") List<Integer> areaList,
			@Param("timePeriod") Integer timePeriod,
			@Param("parentSectorId") Integer parentSectorId);

	
	@Override
	@CachePut(value = { "utdata" })
	public Data save(Data data);
	
	@Override
	@Query(value="select d.percentage,d.district_id_fk,d.time_period_id_fk,d.unit_id_fk,sv.subgroup_val,a.area_name from data d "
			+ "inner join subgroup_val sv on sv.subgroup_val_id = d.subgroup_id_fk "
			+ "inner join area a on a.area_id=d.district_id_fk where indicator_id_fk=:indicatorId "
			+ "and time_period_id_fk=:timeperiodId order by d.district_id_fk desc, sv.subgroup_val_order",nativeQuery=true)
	List<Object[]> findReportData(@Param("indicatorId") Integer indicatorId, @Param("timeperiodId") Integer timeperiodId);
	
	@Override
	@Modifying
	@Transactional
	@Query(value="delete from data where time_period_id_fk = :timeperiodId",nativeQuery=true)
	void deleteByTimeperiod(@Param("timeperiodId") Integer timeperiodId);
	
	/**
	 * For resetting the sequence of data table after deleting during daily aggregation.
	 * If max data_id is null then 0 else the max
	 */
	@Override
	@Query(value="select setval('data_data_id_seq', (case when (select max(data_id) from data) is null "
			+ "then 0 else (select max(data_id) from data) end))",nativeQuery=true)
	void resetSequence();
	
}
