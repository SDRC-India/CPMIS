/**
 * 
 */
package org.sdrc.cpmisweb.service;

import java.text.ParseException;
import java.util.List;

import org.json.simple.JSONArray;
import org.sdrc.cpmisweb.model.DataCollectionModel;
import org.sdrc.cpmisweb.model.DataModel;
import org.sdrc.cpmisweb.model.LineSeries;
import org.sdrc.cpmisweb.model.ValueObject;

/**
 * @author Biswa Ranjan CPMISWEB 
 * 06-Jan-2018 4:46:56 pm
 *
 */
public interface DashboardService {

	List<ValueObject> fetchIndicators(String param);

	List<ValueObject> fetchSources(String param);

	List<ValueObject> fetchUtTimeperiod(Integer iusNid, Integer SourceNid);

	JSONArray fetchAllSectors();

	DataCollectionModel fetchData(String indicatorId, String sourceId, String parentAreaCode, String timeperiodId, Integer childLevel) throws ParseException;

	List<List<LineSeries>> fetchChartData(Integer iusNid, Integer areaNid) throws ParseException;


	List<DataModel> fetchPdfData(String indicatorId, String sourceId, String areaId, String timePeriodId, Integer childLevel);

	String exportPDF(List<String> svgs, String indicatorId, String sourceId, String parentAreaCode, String timeperiodId, Integer childLevel);

	String exportPDFLine(List<String> svgs, Integer iusNid, Integer areaNid);

	public boolean publishData();


	boolean publishData(int agencyId, int year, int month, String monthString);
}
