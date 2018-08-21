package org.sdrc.cpmisweb.springdatarepository;

import java.util.List;


//import org.sdrc.cpmisweb.domain.Agency;
import org.sdrc.cpmisweb.domain.Indicator;
import org.sdrc.cpmisweb.domain.IndicatorClassification;
import org.sdrc.cpmisweb.repository.IndicatorRepository;
import org.springframework.dao.DataAccessException;
import org.springframework.data.jpa.repository.Query;
import org.springframework.data.repository.RepositoryDefinition;
import org.springframework.data.repository.query.Param;

@RepositoryDefinition(domainClass = Indicator.class, idClass = Integer.class)
public interface SpringDataIndicatorRepository extends IndicatorRepository {

	@Query("SELECT uticius, utUnit, " + "  utIn, " + "  subEn   "
			+ " FROM IndicatorClassificationIndicatorUnitSubgroupMapping uticius JOIN uticius.indicatorUnitSubgroup utius "
			+ " JOIN utius.indicator utIn JOIN  utius.unit utUnit JOIN utius.subgroup subEn "
			+ " WHERE uticius.indicatorClassification = :sectorNid and utUnit.unitId in :units Order by uticius.indicatorUnitSubgroup ")
	public List<Object[]> findByIC_Type_(@Param("sectorNid") IndicatorClassification sectorNid, @Param("units") Integer[] units) throws DataAccessException;

	@Override
	@Query("SELECT  utIndicatorEn FROM Data utData, Indicator utIndicatorEn"
			+ " WHERE utData.indicator.indicatorId = utIndicatorEn.indicatorId AND "
			+ " utData.indicatorUnitSubgroup.indicatorUnitSubgroupId = :iusNID " )
	public Indicator findByIndicator_NId(@Param("iusNID")int indicatorId);
	
}
